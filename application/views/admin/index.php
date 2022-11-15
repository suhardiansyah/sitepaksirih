     <!-- Main Content -->
     <div class="main-content">
         <section class="section">
             <div class="section-header">
                 <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Dashboard Admin</h1>
             </div>
             <div class="row">
                 <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="card card-statistic-1">
                         <div class="card-icon bg-primary">
                             <i class="far fa-user"></i>
                         </div>
                         <div class="card-wrap">
                             <div class="card-header">
                                 <h4>Siswa</h4>
                             </div>
                             <div class="card-body">
                                 <?php echo $this->db->count_all('siswa'); ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="card card-statistic-1">
                         <div class="card-icon bg-danger">
                             <i class="fas fa-chalkboard-teacher"></i>
                         </div>
                         <div class="card-wrap">
                             <div class="card-header">
                                 <h4>Instruktur</h4>
                             </div>
                             <div class="card-body">
                                 <?php echo $this->db->count_all('guru'); ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="card card-statistic-1">
                         <div class="card-icon bg-warning">
                             <i class="fas fa-book"></i>
                         </div>
                         <div class="card-wrap">
                             <div class="card-header">
                                 <h4>Materi</h4>
                             </div>
                             <div class="card-body">
                                 <?php echo $this->db->count_all('materi'); ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="card card-statistic-1">
                         <div class="card-icon bg-success">
                             <i class="fas fa-users"></i>
                         </div>
                         <div class="card-wrap">
                             <div class="card-header">
                                 <h4>Kelas</h4>
                             </div>
                             <div class="card-body">
                                 3
                             </div>
                         </div>
                     </div>
                 </div> -->
             </div>
         </section>
     </div>