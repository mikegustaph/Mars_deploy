<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Client_ContactPerson;
use App\Models\ContactPerson;
use App\Models\ContactPersonLimited;
use App\Models\ContactPersonPartner;
use Illuminate\Http\Request;

class ContactPersonController extends Controller
{
    public function addContactPerson()
    {
        $clientId = Client::latest('created_at')->first();
        return view('client.createContactPerson', compact('clientId'));
    }

    public function store(Request $request)
    {

        $contact  = $request->validate([
            'first_name'    =>  'required',
            'middle_name'   =>  'required',
            'last_name'     =>  'required',
            'phone'         =>  'required',
            'email'         =>  'required',
            'tin'           =>  'required',
            'tin_cert'      =>  'required',
            'nida'          =>  'required',
            'nidacopy'      =>  'required|mimes:jpg,jpeg,pdf|max:2048'

        ]);
        if ($request->hasFile('passportcopy')) {
            $passportcopy = $request->file('passportcopy');
            $passportcopyName =  uniqid() . '.' . $passportcopy->getClientOriginalExtension();
            $passportcopy->storeAs('public/uploads', $passportcopyName);
        } else {
            $passportcopyName = null;
        }
        if ($request->hasFile('nidacopy')) {
            $nidacopy = $request->file('nidacopy');
            $nidacopyName =  uniqid() . '.' . $nidacopy->getClientOriginalExtension();
            $nidacopy->storeAs('public/uploads', $nidacopyName);
        }
        if ($request->hasFile('tin_cert')) {
            $tinCert = $request->file('tin_cert');
            $tinCertName =  uniqid() . '.' . $tinCert->getClientOriginalExtension();
            $tinCert->storeAs('public/uploads', $tinCertName);
        }

        $contactPerson = new ContactPerson();

        //$contactPerson->client_id     =    $request->clientId;
        $contactPerson->first_name      =    $request->first_name;
        $contactPerson->middle_name     =    $request->middle_name;
        $contactPerson->last_name       =    $request->last_name;
        //$contactPerson->position      =    $request->position;
        $contactPerson->phone           =    $request->phone;
        $contactPerson->email           =    $request->email;
        $contactPerson->tin             =    $request->tin;
        //$contactPerson->nationality   =    $request->nationality;
        //$contactPerson->director      =    $request->director;
        $contactPerson->radio           =    $request->radio;
        $contactPerson->passport        =    $request->passport;
        $contactPerson->passportcopy    =    $passportcopyName;
        $contactPerson->nida            =    $request->nida;
        $contactPerson->nidacopy        =    $nidacopyName;
        $contactPerson->tinCert         =    $tinCertName;

        $contactPerson->save();
        return redirect()->back()->with('message', 'Successfuly create new contact person!');
    }
    public function AssignContactPerson(Request $request)
    {

        $dbPartner  = $request->input('contactPerson');
        $inpuPartner = ContactPersonPartner::where('contactpeople_id', $dbPartner)->get();

        $missingUser = in_array($dbPartner, $inpuPartner->toArray());
        if (!empty($missingUser)) {
            return redirect()->back()->with('error', 'User is already assign as partner!');
        } else {
            $contactPerson = new ContactPersonPartner();

            $contactPerson->client_id       =   $request->client;
            $contactPerson->contactpeople_id = $request->contactPerson;
            $contactPerson->share_percent   =   $request->sharePercent;
            $contactPerson->save();
            return redirect()->back()->with('message', 'Successfully Assign Contact Person!');
        }
        $contactPerson = new ContactPersonPartner();

        $contactPerson->client_id       =   $request->client;
        $contactPerson->contactpeople_id = $request->contactPerson;
        $contactPerson->share_percent   =   $request->sharePercent;
        $contactPerson->save();
        return redirect()->back()->with('message', 'Successfully Assign Contact Person!');
    }
    public function EditContactPerson($id)
    {
        $contPerson = Client_ContactPerson::find($id);
    }
    public function AssignContactPersonLimited(Request $request)
    {
        $contactPerson = new ContactPersonLimited();

        $contactPerson->client_id         =   $request->client;
        $contactPerson->contactpeople_id  =   $request->contactPerson;
        $contactPerson->position          =   $request->position;
        $contactPerson->number_share      =   $request->numberShare;
        $contactPerson->share_percent     =   $request->shareholding;

        $contactPerson->save();
        return redirect()->back()->with('message', 'Successfully Assign Contact Person!');
    }
    /*public function limitedassigncontact()
    {
        $limitedContPer = ContactPersonLimited::all();
        return view('client.limitedupdate', compact('limitedContPer'));
    }*/
    public function DeleteAssignedContactPerson($id)
    {
        $deleteContactPerson = ContactPersonPartner::find($id);
        $deleteContactPerson->delete();
        return redirect()->back()->with('message', '');
    }
}
