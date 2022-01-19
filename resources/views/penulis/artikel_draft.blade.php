
@extends('layouts.lay_penulis')

@section('judul', 'Tulis Artikel')

{{-- utk mengaktifkan tulisan --}}
@section('menu_artikel', 'active')
@section('menu_sub_draft', 'active')

@section('konten')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Striped Full Width Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Sumber</th>
            <th>Isi</th>
            <th>Status</th>
            <th>Tanggal Terbit</th>
            <th>View</th>
          </tr>
        </thead>
        <tbody>
            {{-- utk ambil data dlm bntk array scra berulang atau looping dri DB --}}
          <tr v-for="(data,index) in list_draft">
            <td>@{{ index+1 }}.</td>
            <td>@{{ data.judul }}</td>
            <td>@{{ data.sumber }}</td>
            <td>@{{ data.isi }}</td>
            <td>@{{ data.status }}</td>
            <td>@{{ data.tgl_terbit }}</td>
            <td>@{{ data.view }}</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        Action
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <button class="dropdown-item" href="#" @click="publish">Publish</button>
                    </div>
                  </div>
            </td>

          </tr>


        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@section('script')
<script>
const App = {
    data() {
        return {
            list_draft:''
        }
    },
    mounted() {
        this.viewData();
    },
    unmounted() {

    },
    methods: {
        viewData(){
            axios.get('/draftGet')
                .then(r => {
                    console.log("sukses");
                    this.list_draft = r.data;
                    console.log(this.list_draft);
                });
        },
        publish(){
            window.location.href="/publish/";

        }
    }
}

Vue.createApp(App).mount('#app');
</script>
@endsection




