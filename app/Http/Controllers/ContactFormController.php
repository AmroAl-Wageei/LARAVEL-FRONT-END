<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    

  
//     // This func will show contact page
//     public function createForm() {

//         $data=Contact::all();
  
  
//         return view('admin.contact.showw',['data'=>$data]);
  
//     }

//         // Store Contact Form data
//         public function ContactUsForm(Request $request) {
  
//           // Form validation
//           $this->validate($request, [
//               'name' => 'required',
//               'email' => 'required|email',
//               'phoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//               'subject'=>'required',
//               'message' => 'required'
//            ]);
  
//           //  Store data in database
//           Contact::create($request->all());
  
  
//       return redirect()->route('user.contact')->with('success', 'We have received your message and would like to thank you for writing to us.');
  
//   }
  
//   public function destroy($id)
//   {
//     Contact::findOrfail($id)->delete();
//       return redirect()->route('contact.createForm');
//   }
}
