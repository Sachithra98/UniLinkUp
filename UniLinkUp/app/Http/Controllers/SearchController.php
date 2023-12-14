<?php

namespace App\Http\Controllers;

use App\Models\PublishNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SearchController extends Controller
{


    public function search(Request $request)
    {

        if($request->ajax()) {

            $output = '';

            $notices = PublishNotice::where('Title', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('Description', 'LIKE', '%'.$request->search.'%')
                            ->get();

            if($notices) {

                foreach($notices as $notice) {

                    $output .=
                //     '<div class="card-body">
                //     <img class="card-img-top" src="'.$product->thumbnail.'" alt="Card image cap">
                //         <h5 class="card-title"><b>'.$product->title.'</b></h5>
                //         <h5 class="card-title"><b class="text-success">'.$product->category.'</b></h5>
                //         <h5 class="card-title">$'.$product->price.'</h5>
                //     </div>
                //   ';

                  '<div class="notice-container">
                      <div class="Nheader">
                    <!-- <h5>Notice Id:{{$notice->Publish_notice_id}}</h5> -->
                      </div>
                    <h2 style=" font-weight: bold;">{{ $notice->Title }}</h2>
                    <p>{{ $notice->Description }}</p>
                    
                    <div class="buttons">
                      <button class="btn">Like <i class="fa fa-thumbs-up"></i></button>
                      <button class="btn">Dislike <i class="fa fa-thumbs-down"></i></button>
                      <button class="btn">Share <i class="fa fa-share-alt"></i></button>
                      
                      </div>
                  </div>';

                }

                return response()->json($output);

            }

        }

        return view('products.search');

    }


}