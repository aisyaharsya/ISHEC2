@extends('pasien.mainpasien')
@section('content')
@include('pasien.partials.sidebarpasien')
<body>
  @if (session()->has('success'))
  <script>
      alert('{{ session('success') }}')
  </script>            
  @endif
    <section class="section dashboard">
        <div class="row">
    
          <!-- Left side columns -->
          <div class="container">
            <div class="row">
    
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Jadwal Pasien</h5>
    
                  <!-- Table with stripped rows -->
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Tanggal</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($reservasiss as $item)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ Date('D',strtotime($item->tgl_hadir)) }}</td>
                        <td > {{ Date('d M Y',strtotime($item->tgl_hadir))}}</td>
                        @if (strtolower($item->status_reservasi) == 'hadir')
                        <td><label class="badge badge-success">{{ ucfirst( $item->status_reservasi) }}</label></td>
                        @endif
                        @if (strtolower($item->status_reservasi) == 'tidak hadir')
                        <td><label class="badge badge-danger">{{ ucfirst( $item->status_reservasi) }}</label></td>
                        @endif
                        @if(strtolower($item->status_reservasi) == 'belum hadir')
                        <td><label class="badge badge-primary">{{ ucfirst( $item->status_reservasi) }}</label></td>
                        @endif
                      </tr>
                      @endforeach
                      {{-- @foreach ($reservasis as $reservasi)
                      <tr>
                        <th>{{$reservasi->id }}</th>
                        <td>{{$reservasi->hari}}</td>
                        <td>{{$reservasi->jam_masuk}}</td>
                        <td>{{$reservasi->jam_pulang}}</td>
                        <td>{{$reservasi->tanggal}}</td>
                        <td>
                          <form action="/reservasi/{{ $reservasi->id }}" method="post" style="display: inline">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{  $reservasi->id  }}">
                      
                          </form>
                            </td>
                      </tr>
                      @endforeach --}}
                    </tbody>
                  </table>
    
    
    
            </div>
            <div class="card-footer">
              {{-- {{ $jadwal->links() }} --}}
            </div>
          </div><!-- End Left side columns -->

        
      
    
</body>
@endsection