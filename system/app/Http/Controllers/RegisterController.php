<?php 

namespace App\Http\Controllers;
use App\Register;

class RegisterController extends controller{
	function index(){
		$data['list_register'] = Register::all();
		return view('register.index', $data);
	}
	function create(){
		return view('register.create');
	}
	function store(){
		$register= new Register;
		$register-> nama = request('nama');
		$register-> username = request('username');
		$register-> email = request('email');
		$register-> password = bcrypt(request('password'));
		$register->save();

		return redirect('register')->with('success','Data berhasil ditambahkan');
	}
	function show(Register $register){
		$data['register'] = $user;
		return view('user.show', $data);
	}
	function edit(Register $register){
		$data['register'] = $register;
		return view('register.edit', $data);
	}
	function update(Register $register){
		$register-> nama = request('nama');
		$register-> username = request('username');
		$register-> email = request('email');
		if(request('password'))	$user-> password = bcrypt(request('password'));
		$user->save();

		return redirect('register')->with('warning','Data berhasil diupdate');
	}
	function destroy(Register $register){
		$register->delete();
		return redirect('register')->with('danger','Data berhasil dihapus');
	}
}