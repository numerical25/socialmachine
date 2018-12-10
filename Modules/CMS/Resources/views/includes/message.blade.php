@if(session()->get('success'))
  @component('cms::includes.message.success')
    {{ session()->get('success') }}  
  @endcomponent
@endif
@if(session()->get('fail'))
  @component('cms::includes.message.danger')
    {{ session()->get('fail') }}  
  @endcomponent
@endif