<div class="p-6">
  <h5 class="font-medium mb-2">Installing Packages Via Composer</h5>
  <p class="text-sm text-gray-600">You may subscribed packages via our private Satis repository. To get started, add the repository to your application's <code>composer.json</code> file:</p>
  @livewire('satifest-guide-for-composer-repository')

  <h5 class="font-medium mb-2">Composer Authentication</h5>
  <p class="text-sm text-gray-600">When your private repositories are password protected, you can store the authentication details permanently. The first time Composer needs to authenticate against some domain it will prompt you for a username/password and then you will be asked whether you want to store it.</p>

  <br>
  
  <p class="text-sm text-gray-600">You can also configure these by hand using the config command if you need to configure a production machine to be able to run non-interactive installs. For example to enter credentials for example.org one could type:</p>

  @livewire('satifest-guide-for-composer-auth', ['model' => Auth::user()])
</div>

@push('footer')
  <script src="{{ mix('js/common.js', 'vendor/satifest') }}"></script>
  <script>
    document.addEventListener("livewire:load", function(event) {
      Livewire.hook('message.processed', () => {
        document.querySelectorAll('pre code').forEach((block) => {
          hljs.highlightBlock(block);
        });
      });
    });

    new ClipboardJS('.clipboard');
    hljs.initHighlightingOnLoad();
  </script>
@endpush
