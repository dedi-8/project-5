<?php 

namespace App\Http\Controllers;
use App\Produk;

class ProdukController extends controller{
	function index(){
		$data['list_produk'] = Produk::all();
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk= new Produk;
		$produk-> nama = request('nama');
		$produk-> berat = request('berat');
		$produk-> harga = request('harga');
		$produk-> warna = request('warna');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success','Data berhasil ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk-> nama = request('nama');
		$produk-> berat = request('berat');
		$produk-> harga = request('harga');
		$produk-> warna = request('warna');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('warning','Data berhasil diupdate');
	}
	function destroy(Produk $produk){
		$produk->delete();
		return redirect('produk')->with('danger','Data berhasil dihapus');
	}
}