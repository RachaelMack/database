@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="dashboard-buttons col-md-3">
        <button class="btn btn-primary">
            Contacts
        </button>
      </div>
        <div class="col-md-3">
          <button class="btn btn-primary">
              Notable Events
          </button>
        </div>
          <div class="col-md-6">
            <form>
            </form>
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search">
              <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <br></br>
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>Previous Transactions</h4>
                  </div>
                  <div class="panel-body">
                      No Previous Transactions
                  </div>
              </div>
          </div>
    </div>
</div>
@endsection
