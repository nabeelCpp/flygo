<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\{User, Agent, Document};

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:agent');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorAgent(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:agents', 'unique:users', 'unique:admins'],
            'username' => ['required', 'string', 'unique:agents'],
            'landline' => ['required'],
            'mobile' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'travel_agent_id' => ['required'],
            'company_representative_name' => ['required'],
            'akama' => ['required'],
            'company_name' => ['required'],
            'company_logo' => ['required','image'],
            'documents.*' => ['required', 'file', 'mimes:doc,docs,png,jpg,jpeg,pdf'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    
    public function showAgentRegisterForm()
    {
        return view('auth.register-agent', ['route' => route('agent.register-view'), 'title'=>'Agent']);
    }

    protected function agentRegister(Request $request)
    {
        $this->validatorAgent($request->all())->validate();
        $data = $request->all();
        $logo = $data['company_logo'];
        $location = public_path('company/logos');
        $logo_filename = $logo->hashName();
        $path = $logo->move($location, $logo_filename);
        $agent_arr = [
            'email' => $data['email'],
            'landline' => $data['landline']?$data['landline']:NULL,
            'mobile' => $data['mobile']?$data['mobile']:NULL,
            'country' => $data['country']?$data['country']:NULL,
            'city' => $data['city']?$data['city']:NULL,
            'travel_agent_id' => $data['travel_agent_id']?$data['travel_agent_id']:NULL,
            'username' => $data['username']?$data['username']:NULL,
            'company_name' => $data['company_name']?$data['company_name']:NULL,
            'name' => $data['company_representative_name']?$data['company_representative_name']:NULL,
            'company_logo' => $logo_filename,
            'akama' => $data['akama']?$data['akama']:NULL,
            'password' => Hash::make($data['password']),
        ];
        $agent = Agent::create($agent_arr);
        if(isset($agent->id) && $agent->id){
            foreach ($data['documents'] as $key => $doc) {
                $location = public_path('company/documents');
                $filename = $doc->hashName();
                $path = $doc->move($location, $filename);
                $document = [
                    'agent_id' => $agent->id,
                    'path' => $filename,
                ];
                Document::create($document);
            }
        }else{
            session()->flash('error', 'Error while signing up! Try again later.');
            unlink(public_path('company/logos/').$logo_filename);
            return back()->withInput();
        }
        // return $agent;
        if (\Auth::guard('agent')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/agent');
        }
        return redirect()->intended('agent');
    }

}
