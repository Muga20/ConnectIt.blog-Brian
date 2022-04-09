@if (session('status'))
<p
    style="color: #fff; width:100%;font-size:20px;font-weight:500;text-align:center;background:#5cb85c;padding:17px 0;margin-bottom:6px;">
    {{ session('status') }}</p>
@endif