@extends('admin.layouts.app')

    @section('content')

        <div class="main-container">
            <div class="header-container">
                <header class="main-header">Students</header>
                <div class="flex">
                    <a href="#">Home</a>
                    <i class="fas fa-angle-right p-2" style="font-size:small; padding:6px"></i>
                    <div>All Students</div>
                </div>
            </div>
            <div class="card-body">
                <div>All Students Data</div>
                <table class="table">
                    <thead class="table-head">
                        <tr>
                            <th>Roll No</th>
                            <th>Image</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Gender</th>
                            <th>Date of birth</th>
                            <th>Phone No</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Slug</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    @endsection