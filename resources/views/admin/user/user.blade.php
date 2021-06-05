@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="table-responsive table-admin">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    @can('edit user')
                    <th>Edit</th>
                    @endcan
                    @role('admin')
                    <th>Delete</th>
                    @endrole('admin')
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="id">{!! $user->id !!}</td>
                    <td class="name">{!! $user->name !!}</td>
                    <td class="email">{!! $user->email !!}</td>
                    @can('edit user')
                    <td>
                                {{-- <a class="btn btn-warning" href="{{ route('editUser', $user->id) }}"><i
                                    class="far fa-pencil"></i> </a> --}}
                                    <button class="btn btn-warning editUser" data-id="{!! $user->id !!}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-pencil"></i></button>
                    </td>@endcan
                    @role('admin')
                    <td>
                        <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                    </td>
                    @endrole
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <div class="col-lg-9">

    </div> --}}
    {{-- <div class="row">
        <div class="col-lg-3">
            <div class="table-responsive" style="background-color: #fff;border-radius:15px 15px 15px 15px">
                <div style="padding:15px 15px 15px 15px">
                    <div>
                        <b>ADD USER</b>
                    </div>
                    <form method="POST" action="{{ route('create') }}">
                        @csrf
                        <div>
                            <div class=" mb-3">
                                <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class=" mb-3">
                                <label for="email"
                                    class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class=" mb-3">
                                <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>


                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class=" form-group mb-3">
                                <label for="password-confirm"
                                    class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>
                        </div>
                        <div class="justify-content-center d-flex">
                            <button type="submit" class="btn btn-primary">
                                {{ __('SAVE') }}
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div> --}}
</div>


@include('admin.user.userCreate_modal')

<script>
    $(document).on('click','.editUser',function()
    {
        var _this=$(this).parents('tr');
        $('#v_id').val(_this.find('.id').text());
        $('#v_name').val(_this.find('.name').text());
        $('#v_email').val(_this.find('.email').text());
    });
</script>
@endsection
