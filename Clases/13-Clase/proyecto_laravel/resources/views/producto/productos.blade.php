@include('header')

    <div class="container py-md-5">
      <div class="row align-items-center">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto["nombre"] }}</td>
                            <td>{{ $producto["precio"] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    </div>

@include('footer')
