@extends('layouts.app')

@section('content-app')
<div class="row row-cards">
        <div class="col-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" id="profile_desc">{{ __('menu.profile') }}</h3>
                <div class="card-options">
                    <a href="{{ url('/profile/edit') }}" class="btn btn-sm btn-pill btn-secondary">{{ __('edit') }}</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-icon alert-success alert-dismissible" role="alert">
                        <i class="fe fe-check mr-2" aria-hidden="true"></i>
                        <button type="button" class="close" data-dismiss="alert"></button>
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table card-table" aria-describedby="profile_desc">
                    <tbody>
                        <tr>
                            <td style="width: 25%;" class="text-muted">{{ __('full_name') }}</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
