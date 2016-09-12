<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class UserController extends Controller
{
  protected $userModel;

  public function __construct(User $users)
  {
    $this->userModel = $users;
  }

  //READ
  public function show(Request $request)
  {
    $users = $this->userModel->all();
    return view('date', ['data' => $users]);
  }

  //EDIT
  public function edit($id)
  {
      $user = User::findOrFail($id);

      return view('edit', compact('user'));
  }

  //UPDATE
  public function update($id, Request $request)
  {

      $requestData = $request->all();

      $user = User::findOrFail($id);
      $user->update($requestData);

      return redirect()->back();
  }

  //DELETE
  public function destroy(Request $request, $id)
  {
		$user = User::where('id', $id)->first();

		if($user) {
			$user->delete();
			return redirect()->back();
		}
	}
}
