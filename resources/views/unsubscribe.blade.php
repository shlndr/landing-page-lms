@extends('layouts.frontend')

@section('content')

<style type="text/css">
  .input-group {
  position: relative;
  margin: 40px 0 20px;
}

input {
  font-size: 18px;
  padding: 10px 0 10px 0px;
  display: block;
  width: 100%;
  border: none;
  border-bottom: 0.5px solid #a9a8ab;
}

input:focus {
  outline: none;
}

label {
  color: #a9a8ab;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

input:focus ~ label,
input:valid ~ label {
  top: -20px;
  font-size: 14px;
  color: #a9a8ab;
}

.bar {
  position: relative;
  display:block;
  width:100%;
}

.bar:before,
.bar:after {
  content: '';
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: #c81f4c;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

.bar:before {
  left: 50%;
}

.bar:after {
  right: 50%;
}

input:focus ~ .bar:before,
input:focus ~ .bar:after {
  width: 50%;
}

.highlight {
  position: absolute;
  height: 60%;
  width: 100px;
  top: 25%;
  left: 0;
  pointer-events: none;
  opacity: 0.5;
}

input:focus ~ .highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

/* animations */
@-webkit-keyframes inputHighlighter {
  from { background: #4285f4; }
  to   { width: 0; background: transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background: #4285f4; }
  to   { width: 0; background: transparent; }
}
@keyframes inputHighlighter {
  from { background: #4285f4; }
  to   { width: 0; background: transparent; }
}
.inner-sect .thank-lt .thank-inner .title4{font-size: 16px;}
</style>

<section class="head-banner">
  <div class="container">

  </div>
</section>

<section class="inner-sect thank">
  <div class="container">
    <div class="container-923">
     <div class="inner-from thank-lt">
       <div class="thank-inner">
         <div class="title4">{{ $title }}</div>
         @if($status != 'noemail')
         <p>{{ $body }}</p>
         @endif
         @if($status == 'noemail')
          <form method="GET" action="{{ url('unsubscribe') }}">
            
            <div class="input-group">
              <input type="email" placeholder="" name="email" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Please enter your email</label>
            </div>

            <button type="submit" class="" name="submit" style="background: #c81f4c;padding:10px 20px;border: none;border-radius: 5px;margin-top: 10px;color: #fff;width: 110px;height: 40px;font-size: 16px;font-weight: 400;">SUBMIT</button>
          </form>
         @endif
       </div>
     </div>    
   </div>
 </div>
</section> 


@endsection

@section('scripts')
<script type="text/javascript">
  // $('a').each(function() {
  //     var href = $(this).attr('href');

  //     if (href) {
  //         href += location.search;
  //         $(this).attr('href', href);
  //     }
  // });
</script>
@endsection
