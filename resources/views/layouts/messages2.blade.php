@if (Session::has('success'))
    <p class="notif bg bg-success text-light text-center">{{ Session::get('success') }}</p>
@elseif (Session::has('fail'))
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('errorModal').style.display='none'">&times;</span>
            <p>{{ Session::get('fail') }}</p>
        </div>
    </div>
@endif
