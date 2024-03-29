@if (Session::has('success'))
<div id="errorModal" class="modal">
    <span class="close" onclick="document.getElementById('errorModal').style.display='none'">&times;</span>
    <div class="modal-content">
        <p>{{ Session::get('success') }}</p>
    </div>
</div>
@elseif (Session::has('fail'))
    <div id="errorModal" class="modal">
        <span class="close" onclick="document.getElementById('errorModal').style.display='none'">&times;</span>
        <div class="modal-content">
            <p>{{ Session::get('fail') }}</p>
        </div>
    </div>
@endif

@if ($errors->any())
    <div id="errorModal" class="modal">
        <span class="close" id="close_modal" onclick="document.getElementById('errorModal').style.display='none'">&times;</span>
        <div class="modal-content">
            <ul>
            {{-- @foreach ($errors->all() as $error) --}}
                        <p>{{$errors->first()}}</p>
                    {{-- <p>{{$error}}</p><br /> --}}
            {{-- @endforeach --}}
            </ul>
        </div>
    </div>
@endif
