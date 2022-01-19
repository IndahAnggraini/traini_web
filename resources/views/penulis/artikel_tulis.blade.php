
@extends('layouts.lay_penulis')

@section('judul', 'Tulis Artikel')

@section('menu_artikel', 'active')
@section('menu_sub_tulis', 'active')

@section('konten')
    {{-- tag utk mnjdi responsif --}}
<div class="row" style="display: flex; justify-content: center;">
    <div class="col-md-10">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" placeholder="Enter Judul" v-model="list_form.judul">
                </div>

                <div class="form-group">
                    <label >Pilih Kategori</label>
                    <select class="form-control"  v-model="list_form.kategori">
                        <option value="">Pilih Kategori</option>
                        <option v-for="(data,index) in list_kategori"  value="1">@{{ data.kategori }}</option>
                    </select>
                  </div>

                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label>
                  <div class="input-group">
                    <div class="custom-file">
                        {{-- id yaitu sebgai selektor --}}
                      <input type="file" class="custom-file-input" id="input_gambar">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>


                    <div class="form-group">
                      <label>Sumber</label>
                      <input type="text" class="form-control" placeholder="Enter Sumber" v-model="list_form.sumber">
                    </div>

                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="" class="form-control" cols="30" rows="10" v-model="list_form.isi"></textarea>
                    </div>

                      <div class="form-group">
                          <label >Pilih Status</label>
                        <select class="form-control" v-model="list_form.status">
                            <option value="">Pilih Status</option>
                            <option value="draft">Draft</option>
                            <option value="publish">Publish</option>
                        </select>
                      </div>

                      <div class="form-group" >
                        <label>Tanggal terbit</label>
                        <input type="date" class="form-control" placeholder="Tanggal" v-model="list_form.tgl_terbit">
                    </div>


                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" class="btn btn-primary float-right px-5" @click="save">Submit</button>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection

@section('script')
<script>
const App = {
    data() {
        return {
            list_form : {
                judul: '',
                kategori: '',
                gambar: '',
                sumber: '',
                isi: '',
                status: '',
                tgl_terbit: '',
            },
            list_kategori:''
        }
    },
    mounted() {
        this.viewData();
        // console.log(this.judul);
    },
    unmounted() {

    },
    methods: {
        save(){
            console.log("ini save");
            console.log(this.list_form);

            // javascript ke php, perantara JSON, list_form_to_php = utk di panggil di controller,
            // JSON.stringify utk mengambil data brdsrkan objek
            // format JSON seperti kurung kurawal
            let formData = new FormData();
            formData.append('list_form_to_php', JSON.stringify(this.list_form));

            //utk gambar fungsi menambah objek dalam javascript
            formData.append('gambar', document.getElementById('input_gambar').files[0]);

            //axios utk post dari route
            axios.post('/saveArtikel', formData)
                .then(r => {
                    console.log("sukses");
                    console.log(r.data);
                });

        },
        viewData(){
            axios.get('/kategori')
                .then(r => {
                    console.log("sukses");
                    this.list_kategori = r.data;
                    console.log(this.list_kategori);
                });
        },
        getkategori(){
          this.list_kategori = r.data;
          console.log(this.list_kategori);
        }
    }
}

Vue.createApp(App).mount('#app');
</script>
@endsection
