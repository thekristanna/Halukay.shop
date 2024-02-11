{{-- 

@if (Session::has('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="text-success">{{ Session::get('success') }}</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                      Close
                    </button>
                  </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#successModal').modal('show');
        });
    </script>
@elseif (Session::has('fail'))
    <div class="modal fade" id="failModal" tabindex="-1" role="dialog" aria-labelledby="failModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="text-danger">{{ Session::get('fail') }}</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                      Close
                    </button>
                  </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#failModal').modal('show');
        });
    </script>
@endif

@if (count($errors) > 0)
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                      Close
                    </button>
                  </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#errorModal').modal('show');
        });
    </script>
@endif --}}
{{-- 
@if (Session::has('success'))
<p class="notif bg bg-success text-light text-center">{{Session::get('success')}}</p>
@elseif (Session::has('fail'))
<p class=" notif bg bg-danger text-light text-center">{{Session::get('fail')}}</p>
@endif
@foreach ($errors -> all() as $error)
    <p id="notif" class="notif bg bg-danger text-light">{{$error}}</p>
@endforeach --}}


{{-- use messages2 --}}