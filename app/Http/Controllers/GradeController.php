<?php 

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Classroms;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
    $gard=Grade:: get();
    return view('pages.Grades.Grade', compact(['gard'=>'gard']) );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()

  {
    return view('pages.Grades.create_Grade');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    // $validated = $request->validated();

    if(Grade::where('name->en',$request->name_en)->orwhere('name->ar',$request->name_ar)->exists()){
      return   redirect()-> back()->with('error',trans('Grade_trans.exits'));
    }
    // $grade=Grade::create($request->all());

    Grade::create([
      'name' => [
         'en' => $request-> name_en,
         'ar' => $request-> name_ar
      ],
      'Notes'=>$request->Notes
   ]);


 session()->flash('masseage','the sucess created');
    return  redirect()->route('Grade.index') ;
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $gard=Grade::find($id);
    return redirect()->route('Grade.edit') ;
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
    $gard=Grade::find($id);
    $gard->name = $request->input('name');
    $gard->Notes = $request->input('Notes');
    $gard->update();
    return  redirect()->route('Grade.index') ;
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
    $gard=Grade::find($id);
    $classroom=Classroms::where('Garde_id', $id)->exits();
    if($classroom){
      return back()->with('error','gggggggggggggggg');


    }
    $gard->destroy();
    return back();

    
  }
  
}

?>