<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Setting;
use App\Mail\ShortEmail;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class ApiAppointmentController extends ApiController
{


  public function __construct(Request $request)
  {

  }


    /**
     * Display a listing of the resource.
     *
     * @return string
     */
      public function index(Request $request)
    {
      $user = auth()->setRequest($request)->user();
      // Get user from $request token.
      if (!$user->role == 'admin') {
        return $this->responseUnauthorized();
      }
      $collection = Appointment::orderBy('created_At','desc')->get();

      return $collection->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
      //===========================================
      // ============ VALIDATION RULES ============
      //===========================================
      $validator = Validator::make($request->all(), [
        'name' => 'string|max:80',
        'g-recaptcha-response' => 'required',
        'email' => 'email',
        //'phone' => 'required|integer|min:10|max:13',
      ]);

      if ($validator->fails()) {
         $validator->getTranslator()->setLocale(app()->getLocale());
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }


      function namedSettings($settings){
        $named_settings = [];
        foreach ($settings as $setting) {
          $named_settings[$setting->name] = $setting;
        }
        return $named_settings;
      }

      $setting = namedSettings(Setting::all());


        try {
          $CreateForm = Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'FormData' => json_encode($request->all()),
            'appointment_case' => $request->appointment_case,
            'appointment_date' => $request->appointment_date,
            'form_type' => $request->form_type,
          ]);


          $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'appointment_case' => $request->appointment_case,
            'appointment_date' => $request->appointment_date,
            'form_type' => $request->form_type,
          ];


          //Mail::to($setting['Email']->value)->send(new ShortEmail($setting['Email']->value,$setting['site_name']->value,$data));

          return back()->withSuccess(trans('lang.your_messsage_has_been_sent'));
          //return redirect('contact')->with('success', 'Task Created Successfully!');
          //return back()->with('success', 'Mesajınız Başarıyla Gönderildi');

        } catch (\Exception $e) {
          return $this->responseServerError($e);
        }
      }


    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param Request $request
   * @param $id
   * @return \Illuminate\Http\JsonResponse
   */
    public function destroy(Request $request, $id)
    {
      $user = auth()->setRequest($request)->user();
      // Get user from $request token.
      if (!$user->role === 'admin') {
        return $this->responseUnauthorized();
      }
      $userData = Appointment::where('id', $id)->firstOrFail();

      try {
        $userData->delete();
        return $this->responseResourceDeleted();
      } catch (Exception $e) {
        return $this->responseServerError('Error deleting resource.');
      }
    }

    public function ajaxService(Request $request){
        $data = Post::where('options' , 'LIKE','%{"id":'.$request->id.'%')->get();
        return response()->json(['data'=>$data]);
    }
}
