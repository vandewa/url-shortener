<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortLink;
use Illuminate\Support\Str;
use App\Http\Requests\Validation;
use Yajra\DataTables\Facades\DataTables;
use DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Session;

class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            
            $data = ShortLink::orderBy('created_at','desc');

            if($request->filled('id')){
                $data->where('id', $request->id);
            }
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <div class="">
                    <a href="'.route('generate-shorten-link.destroy', $row->id ).' " class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
                    </div>';
                    return $actionBtn;
                })
                ->editColumn('code', function ($a) {
                    return '<a target="_blank" href="'.url('/'.$a->code).'">'.url('/'.$a->code).'</a>'  ;
                })
                ->addColumn('status', function ($a) {
                    $awal  = $a->created_at;
                    $akhir = date_create(); // waktu sekarang
                    $diff  = date_diff( $awal, $akhir );
            
                    if($diff->days > 30){
                        return '<span class="badge badge-danger">Non Active</span>'  ;
                    }else {
                        return '<spa n class="badge badge-success">Active</span>'  ;
                    }
                })
                ->addColumn('qrcode', function ($a){
                    $actionBtn = '
                    <div class="">
                    <a href="#" class="btn btn-outline-info round btn-min-width mr-1"  data-placement="top" title="Generate QrCode" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-qrcode mr-1"></i> Generate</a>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['code', 'action', 'status', 'qrcode'])
                ->make(true);
        }
        
        return view('shortenLink');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Validation $request)
    {
       
        if(filled($request->code)){
           $code = $request->code;
        } else {
            $code = Str::random(6);
        }
        $a = ShortLink::create([
            'link' => $request->link,
            'code' => $code
        ]);
   
        Session::flash('keterangan', $a->id);

        return redirect('/')
              ->with('success', 'Shorten Link Generated Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ShortLink::find($id);
        $qrcode = QrCode::size(400)->generate(url('').'/'.$data->code);

        // return $qrcode;
         
        // $image = QrCode::format('png')
        //                  ->merge('images/pemda.png', 0.5, true)
        //                  ->size(500)->errorCorrection('H')
        //                  ->generate('A simple example of QR code!');
        // return response($image)->header('Content-type','image/png');

        // $myFile = public_path("dummy_pdf.pdf");
    	// $headers = ['Content-Type: application/pdf'];
    	// $newName = 'itsolutionstuff-pdf-file-'.time().'.pdf';

    	// return response()->download($myFile, $newName, $headers);


        return view('shortenLink');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShortLink::destroy($id);
    }
    
    public function shortenLink($code, Request $request)
    {
        $find = ShortLink::where('code', $code)->first();
        if($find){
            $awal  = $find->created_at;
            $akhir = date_create(); // waktu sekarang
            $diff  = date_diff( $awal, $akhir );

            if($diff->days > 30){


                if($request->ajax()){
                
                    $data = ShortLink::where('code', $code)->where('created_at','<', DB::raw("date_sub(now(), interval 1 month)"))->orderBy('created_at','desc');
                    
                    return DataTables::of($data)
                        ->addIndexColumn()
                        ->addColumn('status', function ($a) {
                            $awal  = $a->created_at;
                            $akhir = date_create(); // waktu sekarang
                            $diff  = date_diff( $awal, $akhir );
                    
                            if($diff->days > 30){
                                return '<span class="badge badge-danger">Non Active</span>'  ;
                            }else {
                                return '<spa n class="badge badge-success">Active</span>'  ;
                            }
                        })
                        ->editColumn('link', function ($a) {
                            return '<a target="_blank" href="'.url($a->link).'">'.url($a->link).'</a>'  ;
                        })
                        ->rawColumns(['link', 'status'])
                        ->make(true);
                }

                // $find = ShortLink::where('code', $code)->get();

                return view('listLink');

            //    return redirect(route('generate-shorten-link.index'))->with('statusnya', 'oke');
                    // echo "<script>";
                    // echo "alert('Mohon maaf, link sudah expired');";
                    // echo "</script>";
            } else {
                return redirect($find->link);
            }
        } else {
            return view('notfound');
        }
   
    }

}
