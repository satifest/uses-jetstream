<div>
  <h5 class="mt-8 text-2xl">Installing Packages Via Composer</h5>
  <p class="mt-6 text-gray-500">You may subscribed packages via our private Satis repository. To get started, add the repository to your application's <code>composer.json</code> file:</p>
  @livewire('satifest-guide-for-composer-repository')

  <h5 class="mt-8 text-2xl">Composer Authentication</h5>
  <p class="mt-6 text-gray-500">When your private repositories are password protected, you can store the authentication details permanently. The first time Composer needs to authenticate against some domain it will prompt you for a username/password and then you will be asked whether you want to store it.</p>

  <p class="mt-6 text-gray-500">You can also configure these by hand using the config command if you need to configure a production machine to be able to run non-interactive installs. For example to enter credentials for example.org one could type:</p>

  @livewire('satifest-guide-for-composer-auth', ['model' => Auth::user()])
</div>

@push('footer')
  <script src="{{ mix('js/common.js', 'vendor/satifest') }}"></script>
  <script>
    document.addEventListener("livewire:load", function(event) {
      window.livewire.hook('element.updated', () => {
        document.querySelectorAll('pre code').forEach((block) => {
          hljs.highlightBlock(block);
        });
      });
    });

    new ClipboardJS('.clipboard');
    hljs.initHighlightingOnLoad();
  </script>
@endpush
