@component('components.contact-form', [
  'site' => $site,
  'attachment' => false,
  'captcha' => true,
  'submitText' => 'Send'
])
<div class="group">
    <input type="text" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Name</label>
</div>

<div class="group">
    <input type="email" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Email</label>
</div>

<div class="group textarea-group JS--textarea">
    <textarea name="" id="contact-message" rows="3"></textarea>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Message</label>
</div>
@endcomponent
