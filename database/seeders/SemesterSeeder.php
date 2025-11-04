<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ref_tahun_ajaran = array(
			array(
				'id' 	=> 2000,
				'nama'				=> "2000/2001",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2000-07-15",
				'tanggal_selesai'	=> "2001-06-01"
			),
			array(
				'id' 	=> 2001,
				'nama'				=> "2001/2002",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2001-07-15",
				'tanggal_selesai'	=> "2002-06-01"
			),
			array(
				'id' 	=> 2002,
				'nama'				=> "2002/2003",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2002-07-15",
				'tanggal_selesai'	=> "2003-06-01"
			),
			array(
				'id' 	=> 2003,
				'nama'				=> "2003/2004",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2003-07-15",
				'tanggal_selesai'	=> "2004-06-01"
			),
			array(
				'id' 	=> 2004,
				'nama'				=> "2004/2005",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2004-07-15",
				'tanggal_selesai'	=> "2005-06-01"
			),
			array(
				'id' 	=> 2005,
				'nama'				=> "2005/2006",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2005-07-15",
				'tanggal_selesai'	=> "2006-06-01"
			),
			array(
				'id' 	=> 2006,
				'nama'				=> "2006/2007",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2006-07-15",
				'tanggal_selesai'	=> "2007-06-01"
			),
			array(
				'id' 	=> 2007,
				'nama'				=> "2007/2008",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2007-07-15",
				'tanggal_selesai'	=> "2008-06-01"
			),
			array(
				'id' 	=> 2008,
				'nama'				=> "2008/2009",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2008-07-15",
				'tanggal_selesai'	=> "2009-06-01"
			),
			array(
				'id' 	=> 2009,
				'nama'				=> "2009/2010",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2009-07-15",
				'tanggal_selesai'	=> "2010-06-01"
			),
			array(
				'id' 	=> 2010,
				'nama'				=> "2010/2011",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2010-07-15",
				'tanggal_selesai'	=> "2011-06-01"
			),
			array(
				'id' 	=> 2011,
				'nama'				=> "2011/2012",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2011-07-15",
				'tanggal_selesai'	=> "2012-06-01"
			),
			array(
				'id' 	=> 2012,
				'nama'				=> "2012/2013",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2012-07-15",
				'tanggal_selesai'	=> "2013-06-01"
			),
			array(
				'id' 	=> 2013,
				'nama'				=> "2013/2014",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2013-07-15",
				'tanggal_selesai'	=> "2014-06-01"
			),
			array(
				'id' 	=> 2014,
				'nama'				=> "2014/2015",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2014-07-15",
				'tanggal_selesai'	=> "2015-06-01"
			),
			array(
				'id' 	=> 2015,
				'nama'				=> "2015/2016",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2015-07-15",
				'tanggal_selesai'	=> "2016-06-01"
			),
			array(
				'id' 	=> 2016,
				'nama'				=> "2016/2017",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2016-07-15",
				'tanggal_selesai'	=> "2017-06-01"
			),
			array(
				'id' 	=> 2017,
				'nama'				=> "2017/2018",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2017-07-25",
				'tanggal_selesai'	=> "2018-06-01"
			),
			array(
				'id' 	=> 2018,
				'nama'				=> "2018/2019",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2018-07-25",
				'tanggal_selesai'	=> "2019-06-01"
			),
			array(
				'id' 	=> 2019,
				'nama'				=> "2019/2020",
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2019-07-25",
				'tanggal_selesai'	=> "2020-06-01"
			),
			array(
				'id' 	=> 2020,
				'nama'				=> "2020/2021",
				'periode_aktif'		=> 1,
				'tanggal_mulai'		=> "2020-07-25",
				'tanggal_selesai'	=> "2021-06-01"
			),
		);
		// DB::table('semester')->truncate();
		// DB::table('tahunajaran')->truncate();
		foreach($ref_tahun_ajaran as $tahun_ajaran){
    		DB::table('tahunajaran')->insert([
    			'id' 	=> $tahun_ajaran['id'],
    			'nama' 				=> $tahun_ajaran['nama'],
				'periode_aktif'		=> $tahun_ajaran['periode_aktif'],
				'tanggal_mulai'		=> $tahun_ajaran['tanggal_mulai'],
				'tanggal_selesai'	=> $tahun_ajaran['tanggal_selesai'],
				'created_at' 		=> now(),
				'updated_at' 		=> now(),
    		]);
    	}

        $ref_semester = array(
			array(
				'id' 		=> "20001",
				'tahunajaran_id'	=> 2000,
				'nama' 				=> "2000/2001 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2000-07-01",
				'tanggal_selesai'	=> "2000-12-31"
			),
			array(
				'id' 		=> "20002",
				'tahunajaran_id'	=> 2000,
				'nama' 				=> "2000/2001 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2001-01-01",
				'tanggal_selesai'	=> "2001-06-01"
			),
			array(
				'id' 		=> "20011",
				'tahunajaran_id'	=> 2001,
				'nama' 				=> "2001/2002 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2001-07-01",
				'tanggal_selesai'	=> "2001-12-31"
			),
			array(
				'id' 		=> "20012",
				'tahunajaran_id'	=> 2001,
				'nama' 				=> "2001/2002 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2002-01-01",
				'tanggal_selesai'	=> "2002-06-01"
			),
			array(
				'id' 		=> "20021",
				'tahunajaran_id'	=> 2002,
				'nama' 				=> "2002/2003 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2002-07-01",
				'tanggal_selesai'	=> "2002-12-31"
			),
			array(
				'id' 		=> "20022",
				'tahunajaran_id'	=> 2002,
				'nama' 				=> "2002/2003 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2003-01-01",
				'tanggal_selesai'	=> "2003-06-01"
			),
			array(
				'id' 		=> "20031",
				'tahunajaran_id'	=> 2003,
				'nama' 				=> "2003/2004 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2003-07-01",
				'tanggal_selesai'	=> "2003-12-31"
			),
			array(
				'id' 		=> "20032",
				'tahunajaran_id'	=> 2003,
				'nama' 				=> "2003/2004 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2004-01-01",
				'tanggal_selesai'	=> "2004-06-01"
			),
			array(
				'id' 		=> "20041",
				'tahunajaran_id'	=> 2004,
				'nama' 				=> "2004/2005 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2004-07-01",
				'tanggal_selesai'	=> "2004-12-31"
			),
			array(
				'id' 		=> "20042",
				'tahunajaran_id'	=> 2004,
				'nama' 				=> "2004/2005 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2005-01-01",
				'tanggal_selesai'	=> "2005-06-01"
			),
			array(
				'id' 		=> "20051",
				'tahunajaran_id'	=> 2005,
				'nama' 				=> "2005/2006 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2005-07-01",
				'tanggal_selesai'	=> "2005-12-31"
			),
			array(
				'id' 		=> "20052",
				'tahunajaran_id'	=> 2005,
				'nama' 				=> "2005/2006 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2006-01-01",
				'tanggal_selesai'	=> "2006-06-01"
			),
			array(
				'id' 		=> "20061",
				'tahunajaran_id'	=> 2006,
				'nama' 				=> "2006/2007 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2006-07-01",
				'tanggal_selesai'	=> "2006-12-31"
			),
			array(
				'id' 		=> "20062",
				'tahunajaran_id'	=> 2006,
				'nama' 				=> "2006/2007 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2007-01-01",
				'tanggal_selesai'	=> "2007-06-01"
			),
			array(
				'id' 		=> "20071",
				'tahunajaran_id'	=> 2007,
				'nama' 				=> "2007/2008 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2007-07-01",
				'tanggal_selesai'	=> "2007-12-31"
			),
			array(
				'id' 		=> "20072",
				'tahunajaran_id'	=> 2007,
				'nama' 				=> "2007/2008 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2008-01-01",
				'tanggal_selesai'	=> "2008-06-01"
			),
			array(
				'id' 		=> "20081",
				'tahunajaran_id'	=> 2008,
				'nama' 				=> "2008/2009 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2008-07-01",
				'tanggal_selesai'	=> "2008-12-31"
			),
			array(
				'id' 		=> "20082",
				'tahunajaran_id'	=> 2008,
				'nama' 				=> "2008/2009 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2009-01-01",
				'tanggal_selesai'	=> "2009-06-01"
			),
			array(
				'id' 		=> "20091",
				'tahunajaran_id'	=> 2009,
				'nama' 				=> "2009/2010 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2009-07-01",
				'tanggal_selesai'	=> "2009-12-31"
			),
			array(
				'id' 		=> "20092",
				'tahunajaran_id'	=> 2009,
				'nama' 				=> "2009/2010 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2010-01-01",
				'tanggal_selesai'	=> "2010-06-01"
			),
			array(
				'id' 		=> "20101",
				'tahunajaran_id'	=> 2010,
				'nama' 				=> "2010/2011 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2010-07-01",
				'tanggal_selesai'	=> "2010-12-31"
			),
			array(
				'id' 		=> "20102",
				'tahunajaran_id'	=> 2010,
				'nama' 				=> "2010/2011 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2011-01-01",
				'tanggal_selesai'	=> "2011-06-01"
			),
			array(
				'id' 		=> "20111",
				'tahunajaran_id'	=> 2011,
				'nama' 				=> "2011/2012 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2011-07-01",
				'tanggal_selesai'	=> "2011-12-31"
			),
			array(
				'id' 		=> "20112",
				'tahunajaran_id'	=> 2011,
				'nama' 				=> "2011/2012 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2012-01-01",
				'tanggal_selesai'	=> "2012-06-01"
			),
			array(
				'id' 		=> "20121",
				'tahunajaran_id'	=> 2012,
				'nama' 				=> "2012/2013 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2012-07-01",
				'tanggal_selesai'	=> "2012-12-31"
			),
			array(
				'id' 		=> "20122",
				'tahunajaran_id'	=> 2012,
				'nama' 				=> "2012/2013 Genap",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2012-07-01",
				'tanggal_selesai'	=> "2012-12-01"
			),
			array(
				'id' 		=> "20131",
				'tahunajaran_id'	=> 2013,
				'nama' 				=> "2013/2014 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2013-07-01",
				'tanggal_selesai'	=> "2013-12-31"
			),
			array(
				'id' 		=> "20132",
				'tahunajaran_id'	=> 2013,
				'nama' 				=> "2013/2014 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2014-01-01",
				'tanggal_selesai'	=> "2014-06-01"
			),
			array(
				'id' 		=> "20141",
				'tahunajaran_id'	=> 2014,
				'nama' 				=> "2014/2015 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2014-07-01",
				'tanggal_selesai'	=> "2014-12-31"
			),
			array(
				'id' 		=> "20142",
				'tahunajaran_id'	=> 2014,
				'nama' 				=> "2014/2015 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2015-01-01",
				'tanggal_selesai'	=> "2015-06-30"
			),
			array(
				'id' 		=> "20151",
				'tahunajaran_id'	=> 2015,
				'nama' 				=> "2015/2016 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2015-07-01",
				'tanggal_selesai'	=> "2015-12-31"
			),
			array(
				'id' 		=> "20152",
				'tahunajaran_id'	=> 2015,
				'nama' 				=> "2015/2016 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2016-01-01",
				'tanggal_selesai'	=> "2016-06-30"
			),
			array(
				'id' 		=> "20161",
				'tahunajaran_id'	=> 2016,
				'nama' 				=> "2016/2017 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2016-07-01",
				'tanggal_selesai'	=> "2016-12-31"
			),
			array(
				'id' 		=> "20162",
				'tahunajaran_id'	=> 2016,
				'nama' 				=> "2016/2017 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2017-01-01",
				'tanggal_selesai'	=> "2017-06-30"
			),
			array(
				'id' 		=> "20171",
				'tahunajaran_id'	=> 2017,
				'nama' 				=> "2017/2018 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2017-07-01",
				'tanggal_selesai'	=> "2018-01-26"
			),
			array(
				'id' 		=> "20172",
				'tahunajaran_id'	=> 2017,
				'nama' 				=> "2017/2018 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2018-01-27",
				'tanggal_selesai'	=> "2018-06-30"
			),
			array(
				'id' 		=> "20181",
				'tahunajaran_id'	=> 2018,
				'nama' 				=> "2018/2019 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2018-07-01",
				'tanggal_selesai'	=> "2018-12-31"
			),
			array(
				'id' 		=> "20182",
				'tahunajaran_id'	=> 2018,
				'nama' 				=> "2018/2019 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2019-01-01",
				'tanggal_selesai'	=> "2019-07-15"
			),
			array(
				'id' 		=> "20191",
				'tahunajaran_id'	=> 2019,
				'nama' 				=> "2019/2020 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2019-07-01",
				'tanggal_selesai'	=> "2019-12-31"
			),
			array(
				'id' 		=> "20192",
				'tahunajaran_id'	=> 2019,
				'nama' 				=> "2019/2020 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2020-01-01",
				'tanggal_selesai'	=> "2020-07-15"
			),
			array(
				'id' 		=> "20201",
				'tahunajaran_id'	=> 2020,
				'nama' 				=> "2020/2021 Ganjil",
				'semester' 			=> 1,
				'periode_aktif'		=> 0,
				'tanggal_mulai'		=> "2020-07-01",
				'tanggal_selesai'	=> "2020-12-31"
			),
			array(
				'id' 		=> "20202",
				'tahunajaran_id'	=> 2020,
				'nama' 				=> "2020/2021 Genap",
				'semester' 			=> 2,
				'periode_aktif'		=> 1,
				'tanggal_mulai'		=> "2021-01-01",
				'tanggal_selesai'	=> "2021-07-15"
			),
		);
		foreach($ref_semester as $semester){
    		DB::table('semester')->insert([
    			'id' 		=> $semester['id'],
    			'tahunajaran_id' 	=> $semester['tahunajaran_id'],
    			'nama' 				=> $semester['nama'],
				'semester'			=> $semester['semester'],
				'periode_aktif'		=> $semester['periode_aktif'],
				'tanggal_mulai'		=> $semester['tanggal_mulai'],
				'tanggal_selesai'	=> $semester['tanggal_selesai'],
				'created_at' 		=> now(),
				'updated_at' 		=> now(),
    		]);

    	}
    }
}
