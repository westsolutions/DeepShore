@component('components.contact-form', [
  'site' => $site,
  'attachment' => false,
  'captcha' => true,
  'submitText' => 'Send'
])
<div class="group">
    <input type="text" name="_name" required/>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>{{ $site->trans('Name') }}</label>
</div>

<div class="group">
    <input type="email" name="_email" required/>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>{{ $site->trans('Email') }}</label>
</div>

<div class="group textarea-group JS--textarea">
    <textarea name="_message" id="contact-message" rows="3"></textarea>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>{{ $site->trans('Message') }}</label>
</div>
@endcomponent
