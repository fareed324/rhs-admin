@extends('layouts.master')
@section('title','Add Doctor')
@section('content')

   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add</a></li>
                    </ol>
                    <button type="button" class="print btn mb-1 btn-primary btn-lg "><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                </div>
            </div>



            <div class="container-fluid content">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    <?php
                                    date_default_timezone_set("Asia/Karachi");
                                    echo "Date:".date('d:m:y'). "<br>Time:" . date("h:i:sa");
                                    ?>
                                    </p>
                                <h3>Add Record {{ $user->name }}</h3>
                                    <p>{{ $user->desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid content">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div >
                            <div >
                                <form>
                                    <div class="form-row align-items-center">

                                        <div class="col-auto">
                                            <label class="sr-only">Username</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"> Name </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <br><br>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"> Age </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Your Age">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{-- tabel --}}


        </div>
        </div>
        <script type="text/JavaScript" src="path/to/jquery.print.js"></script>
        <script  type="text/JavaScript">

            $(document).ready(function(){
                console.log("ready");
                $('.print').on('click', function() {
              //  console.log("jquery ready");
                $.print(".content");
                });
            // Ctrl+P is Command Disable Code //
                document.addEventListener("keydown", function (event) {
                    if (event.ctrlKey) {
                        event.preventDefault();
                    }
                });
            // Ctrl+P is Command Disable Code //
            });

        </script>
@endsection

