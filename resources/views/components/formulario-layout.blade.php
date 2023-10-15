<x-general-layout>
  <!-- page title -->
  <!--================================
  =            Page Title            =
  =================================-->
  <section class="page-title">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
          <!-- Title text -->
          <h3>Formulario</h3>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </section>
  <!-- page title -->

  <section class="section">
      <div class="container">
          <div class="row">
              <div class="contact-us-content p-4">
                  <h2 class="pt-3">Por favor, introduzca la información que se pide.</h2>
              </div>
              <div class="col-md-6">
                  {{ $slot }}
              </div>
          </div>
      </div>
  </section>
</x-general-layout>
