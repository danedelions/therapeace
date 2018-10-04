@extends('layouts.adm')

@section('dashboard')
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="dist/assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">Chin China</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="/admin"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">PAGES</li>
                    
                    <li>
                        <a href="/admin-user"><i class="sidebar-item-icon fa fa-table"></i>
                        <span class="nav-label">Users</span></a>
                    </li>
                    <li>
                        <a href="/admin-pending"><i class="sidebar-item-icon fa fa-edit"></i><span class="nav-label">Pending Applicants</span></a>
                    </li>
                    <li>
                        <a href="/admin-history"><i class="sidebar-item-icon fa fa-map"></i><span class="nav-label">History</span></a>
                    </li>
                    <li>
                        <a href="/admin-reports"><i class="sidebar-item-icon fa fa-envelope"></i><span class="nav-label">Reports of Abuse</span></a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
          <h2>Search Bar</h2>
          <p>Reports of Abuse</p>           
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Session ID</th>
                <th>Date</th>
                <th>Info</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>100010</td>
                <td>MM-DD-YYYY</td>
                <td><a class="btn btn-outline-info" href="#"><i style="color:black;" class="far fa-eye"></i></a> </td>
                
              </tr>        
            </tbody>
          </table>
        </div>
        
                
            
        <!-- END PAGE CONTENT-->
            
        </div>
    </div>
@endsection