@component('mail::message')
<h3>Contact mail send Contact from <a href="http://sylhetiBiyashadi.com">sylhetiBiyashadi.com</a> </h3>


Name: {{$data['cname']}}<br>
Email: {{$data['cemail']}}<br>
Phone: {{$data['cphone']}}<br>
Topic: {{$data['topic']}}<br>
Message: {{nl2br($data['message'])}}


Thanks With love <a href="http://iosoup.com/" target="_blank">ioSoup</a>
@endcomponent
