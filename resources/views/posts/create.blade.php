<x-layouts.app>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 lg:py-24">
        <!-- Estas son clases de TailwindCSS, para que el site se ubique un poco-->
        <div class="max-w-3xl mx-auto">
            <form action="{{route('post.store')}}" method="post">
                @csrf <!-- ESTO ES IMPORTANTISIMO PARA PODER MANDAR UN FORMULARIO -->
                <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
                    <div class="px-4 py-5 sm:px-6">
                        <h1>CK Editor</h1>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <textarea name="content" id="editor">
                            Edgar es la hostia 😎
                        </textarea>
                    </div>
                    <div class="px-4 py-4 sm:px-6">
                        <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
            
                
                
            
        </div>
    </div>
    <!-- Este es el push que comentamos antes, meterá el codigo que se encuentre dentro de la directiva 
         en la posicion de el stack correspondiente, en este caso @ stack('js) -->
    @push('js') 
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endpush
</x-layouts.app>
