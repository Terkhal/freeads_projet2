<h1>profile section</h1>

@extends('layouts.freeadds_layout')

@section('content')
<link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">

<style>

</style>
<div class="container">
    <div class="content">
        <div class="container content border">
            <div class="border filter">
                <div class="border">User profil</div>
                <div class="border">Name: </div>
                <div class="border">email</div>
                <div class="border">password reset</div>

            </div>
            <div class="productcontainer">
                <div class="product">
                    <div class="border product flex">
                        <div class=" border img ">product image</div>
                        <div class=" border product ">
                            <div class="border">product title</div>
                            <div class="border">category</div>
                            <div class="border">description</div>

                        </div>
                    </div>
                    <div class="border price">
                        <div class="border">price</div>
                        <div class="border">cart</div>
                    </div>



                </div>

                <div class="product">
                    <div class="border product flex">
                        <div class=" border img ">product image</div>
                        <div class=" border product ">
                            <div class="border">product title</div>
                            <div class="border">category</div>
                            <div class="border">description</div>

                        </div>
                    </div>
                    <div class="border price">
                        <div class="border">price</div>
                        <div class="border">cart</div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection