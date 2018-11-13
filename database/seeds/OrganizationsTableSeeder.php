<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(\App\Models\Organization::class)->create([
	    'name_display' => 'Agnes Scott College',
	    'name_alpha' => 'Agnes Scott College',
	    'website' => 'www.agnesscott.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	    'name_display' => 'Alabama A&M University ',
	    'name_alpha' => 'Alabama A&M University ',
	    'website' => 'Aamu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	    'name_display' => 'University of Alabama',
	    'name_alpha' => 'Alabama, University of',
	    'website' => 'www.ua.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	    'name_display' => 'University of Alabama, Birmingham',
	    'name_alpha' => 'Alabama, University of, Birmingham',
	    'website' => 'www.uab.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	    'name_display' => 'University of Alabama, Huntsville',
	    'name_alpha' => 'Alabama, University of, Huntsville',
	    'website' => 'www.uah.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'American University',
	'name_alpha' => 'American University',
	'website' => 'www.american.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Arcadia University',
	'name_alpha' => 'Arcadia University',
	'website' => 'www.arcadia.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Assumption College',
	'name_alpha' => 'Assumption College',
	'website' => 'www.assumption.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Auburn University',
	'name_alpha' => 'Auburn University',
	'website' => 'www.auburn.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Auburn University, Montgomery',
	'name_alpha' => 'Auburn University, Montgomery',
	'website' => 'www.aum.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Austin Peay State University',
	'name_alpha' => 'Austin Peay State University',
	'website' => 'www.apsu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Bates College',
	'name_alpha' => 'Bates College',
	'website' => 'www.bates.edu'
	]);
	
	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Baylor University',
	'name_alpha' => 'Baylor University',
	'website' => 'www.baylor.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Belmont University',
	'name_alpha' => 'Belmont University',
	'website' => 'www.belmont.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Berea College',
	'name_alpha' => 'Berea College',
	'website' => 'www.berea.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Berry College',
	'name_alpha' => 'Berry College',
	'website' => 'www.berry.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Bethel University',
	'name_alpha' => 'Bethel University',
	'website' => 'www.bethelu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Birmingham-Southern College',
	'name_alpha' => 'Birmingham-Southern College',
	'website' => 'www.bsc.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Boston University',
	'name_alpha' => 'Boston University',
	'website' => 'www.bu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Bowdoin College',
	'name_alpha' => 'Bowdoin College',
	'website' => 'www.bowdoin.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Brandeis University',
	'name_alpha' => 'Brandeis University',
	'website' => 'www.brandeis.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Brenau University',
	'name_alpha' => 'Brenau University ',
	'website' => 'www.brenau.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Bryan College',
	'name_alpha' => 'Bryan College',
	'website' => 'www.bryan.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Butler University',
	'name_alpha' => 'Butler University',
	'website' => 'https://www.butler.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Carleton College',
	'name_alpha' => 'Carleton College',
	'website' => 'www.carleton.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Carson-Newman University',
	'name_alpha' => 'Carson-Newman University',
	'website' => 'www.cn.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Case Western Reserve University',
	'name_alpha' => 'Case Western Reserve University',
	'website' => 'www.case.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Catawba College',
	'name_alpha' => 'Catawba College',
	'website' => 'www.catawba.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Centre College',
	'name_alpha' => 'Centre College',
	'website' => 'www.centre.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'College of Charleston',
	'name_alpha' => 'Charleston, College of',
	'website' => 'www.cofc.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Chattanooga College',
	'name_alpha' => 'Chattanooga College',
	'website' => 'chattanoogacollege.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Chattanooga State Community College',
	'name_alpha' => 'Chattanooga State Community College',
	'website' => 'www.chattanoogastate.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'University of Chicago',
	'name_alpha' => 'Chicago, University of',
	'website' => 'www.uchicago.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Christian Brothers University',
	'name_alpha' => 'Christian Brothers University',
	'website' => 'www.cbu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Chrystal Russell',
	'name_alpha' => 'Chrystal Russell',
	'website' => 'www.rhodes.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Clark University',
	'name_alpha' => 'Clark University',
	'website' => 'www.clarku.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Clemson University',
	'name_alpha' => 'Clemson University ',
	'website' => 'www.clemson.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Coastal Carolina University',
	'name_alpha' => 'Coastal Carolina University',
	'website' => 'www.coastal.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'College of Coastal Georgia',
	'name_alpha' => 'Coastal Georgia, College of',
	'website' => 'www.ccga.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Colgate University',
	'name_alpha' => 'Colgate University',
	'website' => 'www.colgate.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Colorado College',
	'name_alpha' => 'Colorado College',
	'website' => 'https://www.coloradocollege.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Columbia College Chicago',
	'name_alpha' => 'Columbia College Chicago',
	'website' => 'www.colum.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Columbia College, South Carolina',
	'name_alpha' => 'Columbia College, South Carolina',
	'website' => 'www.columbiasc.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Converse College',
	'name_alpha' => 'Converse College',
	'website' => 'www.converse.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Covenant College',
	'name_alpha' => 'Covenant College',
	'website' => 'www.covenant.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Cumberland University',
	'name_alpha' => 'Cumberland University',
	'website' => 'www.cumberland.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Dallas Baptist University',
	'name_alpha' => 'Dallas Baptist University',
	'website' => 'https://www.dbu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Dalton State College',
	'name_alpha' => 'Dalton State College',
	'website' => 'www.daltonstate.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'University of Dayton',
	'name_alpha' => 'Datyon, University of',
	'website' => 'www.udayton.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Davidson College',
	'name_alpha' => 'Davidson College',
	'website' => 'www.davidson.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Denison University',
	'name_alpha' => 'Denison University',
	'website' => 'www.denison.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'DePauw University',
	'name_alpha' => 'DePauw University',
	'website' => 'www.depauw.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Dickinson College',
	'name_alpha' => 'Dickinson College',
	'website' => 'www.dickinson.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Drew University',
	'name_alpha' => 'Drew University',
	'website' => 'www.drew.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Drexel University',
	'name_alpha' => 'Drexel University',
	'website' => 'www.drexel.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Earlham College',
	'name_alpha' => 'Earlham College',
	'website' => 'www.earlham.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'East Tennessee State University',
	'name_alpha' => 'East Tennessee State University',
	'website' => 'www.etsu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Eckerd College',
	'name_alpha' => 'Eckerd College',
	'website' => 'www.eckerd.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Ecole Hôtelière de Lausanne',
	'name_alpha' => 'Ecole Hôtelière de Lausanne',
	'website' => 'www.ehl.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'EdSouth Student Outreach Services',
	'name_alpha' => 'EdSouth Student Outreach Services',
	'website' => 'www.edsouth.org/studentoutreachservices'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Educational Funding of the South',
	'name_alpha' => 'Educational Funding of the South',
	'website' => 'www.edsouth.org'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Elon University',
	'name_alpha' => 'Elon University',
	'website' => 'www.elon.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Embry-Riddle Aeronautical University',
	'name_alpha' => 'Embry-Riddle Aeronautical University',
	'website' => 'daytonabeach.erau.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Emory & Henry College',
	'name_alpha' => 'Emory & Henry College',
	'website' => 'www.ehc.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Emory University',
	'name_alpha' => 'Emory University',
	'website' => 'www.emory.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Fisk University',
	'name_alpha' => 'Fisk University',
	'website' => 'www.fisk.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Florida Southern College',
	'name_alpha' => 'Florida Southern College',
	'website' => 'www.flsouthern.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Franklin & Marshall College',
	'name_alpha' => 'Franklin & Marshall College',
	'website' => 'www.frandm.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Freed-Hardeman University',
	'name_alpha' => 'Freed-Hardeman University',
	'website' => 'www.fhu.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'Furman Univerisity',
	'name_alpha' => 'Furman Univerisity',
	'website' => 'www.furman.edu'
	]);

	factory(\App\Models\Organization::class)->create([
	'name_display' => 'George Mason University',
	'name_alpha' => 'George Mason University',
	'website' => 'www.gmu.edu'
	]);

	factory(\App\Models\Organization::class)->create(['name_display' => 'George Washington University','name_alpha' => 'George Washington University','website' => 'undergraduate.admissions.gwu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Georgia College','name_alpha' => 'Georgia College','website' => 'www.gcsu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Georgia Institute of Technology','name_alpha' => 'Georgia Institute of Technology','website' => 'www.gatech.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Georgia Southern University','name_alpha' => 'Georgia Southern University','website' => 'www.georgiasouthern.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Georgia','name_alpha' => 'Georgia, University of','website' => 'www.uga.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Goucher College','name_alpha' => 'Goucher College','website' => 'www.goucher.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Guilford College','name_alpha' => 'Guilford College','website' => 'www.guilford.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Hamilton College','name_alpha' => 'Hamilton College','website' => 'www.hamilton.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Hendrix College','name_alpha' => 'Hendrix College','website' => 'www.hendrix.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'High Point University','name_alpha' => 'High Point University','website' => 'www.highpoint.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Hillsdale College','name_alpha' => 'Hillsdale College','website' => 'www.hillsdale.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Hiwassee College ','name_alpha' => 'Hiwassee College ','website' => 'www.hiwassee.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Hollins University','name_alpha' => 'Hollins University','website' => 'www.hollins.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'College of the Holy Cross','name_alpha' => 'Holy Cross, College of the','website' => 'www.holycross.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'IE University','name_alpha' => 'IE University','website' => 'www.ie.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Illinois Wesleyan University','name_alpha' => 'Illinois Wesleyan University','website' => 'www.iwu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Jacksonville State University','name_alpha' => 'Jacksonville State University','website' => 'www.jsu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Jacksonville University','name_alpha' => 'Jacksonville University','website' => 'www.ju.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Jacobs University Bremen','name_alpha' => 'Jacobs University Bremen','website' => 'www.jacobs-university.de']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Jerica Johnson','name_alpha' => 'Jerica Johnson','website' => 'www.maryvillecollege.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Johns Hopkins University','name_alpha' => 'Johns Hopkins University','website' => 'www.jhu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Johnson & Wales University','name_alpha' => 'Johnson & Wales University','website' => 'www.jwu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Juniata College','name_alpha' => 'Juniata College','website' => 'www.juniata.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Karlsruhe Institute of Technology - Carl Benz School of Engineering','name_alpha' => 'Karlsruhe Institute of Technology - Carl Benz School of Engineering','website' => 'carlbenz.idschools.kit.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Keiser University - Flagship Campus','name_alpha' => 'Keiser University - Flagship Campus','website' => 'http://www.keiseruniversity.edu/residential/']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Kennesaw State University','name_alpha' => 'Kennesaw State University','website' => 'www.kennesaw.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Kentucky','name_alpha' => 'Kentucky, University of','website' => 'www.uky.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Kenyon College','name_alpha' => 'Kenyon College','website' => 'www.kenyon.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'King University','name_alpha' => 'King University','website' => 'www.king.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Lafayette College','name_alpha' => 'Lafayette College','website' => 'www.lafayette.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Lake Forest College','name_alpha' => 'Lake Forest College','website' => 'www.lakeforest.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Lee University','name_alpha' => 'Lee University','website' => 'www.leeuniversity.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Lehigh University','name_alpha' => 'Lehigh University','website' => 'www.lehigh.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Les Roches - Switzerland','name_alpha' => 'Les Roches - Switzerland','website' => 'www.lesroches.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Lincoln Memorial University','name_alpha' => 'Lincoln Memorial University','website' => 'www.lmunet.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Lipscomb University','name_alpha' => 'Lipscomb University','website' => 'www.lipscomb.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Long Island University','name_alpha' => 'Long Island University','website' => 'www.liu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Louisiana State University ','name_alpha' => 'Louisiana State University ','website' => 'www.lsu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Loyola University New Orleans','name_alpha' => 'Loyola University New Orleans','website' => 'www.loyno.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Lynn University','name_alpha' => 'Lynn University','website' => 'www.lynn.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Marist College','name_alpha' => 'Marist College','website' => 'www.marist.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Marshall University','name_alpha' => 'Marshall University','website' => 'www.Marshall.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Mary Washington ','name_alpha' => 'Mary Washington, University of ','website' => 'www.umw.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Maryville College','name_alpha' => 'Maryville College','website' => 'www.maryvillecollege.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'McDaniel College','name_alpha' => 'McDaniel College','website' => 'www.mcdaniel.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Memphis College of Art','name_alpha' => 'Memphis College of Art','website' => 'www.mca.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Memphis','name_alpha' => 'Memphis, University of','website' => 'www.memphis.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Mercer University','name_alpha' => 'Mercer University','website' => 'www.mercer.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Miami University','name_alpha' => 'Miami University','website' => 'www.miamioh.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Middle Tennessee State University','name_alpha' => 'Middle Tennessee State University','website' => 'www.mtsu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Millsaps College','name_alpha' => 'Millsaps College','website' => 'www.millsaps.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Mississippi State University','name_alpha' => 'Mississippi State University','website' => 'www.msstate.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Mississippi State University- CALS&CFR','name_alpha' => 'Mississippi State University- CALS&CFR','website' => 'www.cals.msstate.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Mississippi','name_alpha' => 'Mississippi, University of','website' => 'www.olemiss.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Missouri','name_alpha' => 'Missouri, University of','website' => 'www.missouri.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Montevallo','name_alpha' => 'Montevallo, University of','website' => 'www.montevallo.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Montreat College','name_alpha' => 'Montreat College','website' => 'www.montreat.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'New Life Bible College','name_alpha' => 'New Life Bible College','website' => 'http://www.newlifecollege.net/']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'New York University','name_alpha' => 'New York University','website' => 'nyu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of North Alabama-College of Arts and Sciences','name_alpha' => 'North Alabama-College of Arts and Sciences, University of','website' => 'www.una.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'North Carolina Outward Bound School','name_alpha' => 'North Carolina Outward Bound School','website' => 'www.ncobs.org']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of North Georgia','name_alpha' => 'North Georgia, University of','website' => 'www.ung.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Northeastern University','name_alpha' => 'Northeastern University','website' => 'www.northeastern.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Nova Southeastern University','name_alpha' => 'Nova Southeastern University','website' => 'www.nova.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Occidental College','name_alpha' => 'Occidental College','website' => 'www.oxy.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Oglethorpe University','name_alpha' => 'Oglethorpe University','website' => 'www.oglethorpe.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Old Dominion University','name_alpha' => 'Old Dominion University','website' => 'www.odu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Piedmont College ','name_alpha' => 'Piedmont College ','website' => 'www.piedmont.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Presbyterian College','name_alpha' => 'Presbyterian College','website' => 'https://www.presby.edu/']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Providence College','name_alpha' => 'Providence College','website' => 'www.providence.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Purdue University','name_alpha' => 'Purdue University','website' => 'www.purdue.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Queens University of Charlotte','name_alpha' => 'Queens University of Charlotte','website' => 'www.queens.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Radford University','name_alpha' => 'Radford University','website' => 'www.radford.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Redemption School of Ministry ','name_alpha' => 'Redemption School of Ministry ','website' => 'www.rsm.org']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Reinhardt University','name_alpha' => 'Reinhardt University','website' => 'www.reinhardt.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Rhodes College','name_alpha' => 'Rhodes College','website' => 'www.rhodes.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Richmond','name_alpha' => 'Richmond, University of','website' => 'www.richmond.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Roanoke College','name_alpha' => 'Roanoke College','website' => 'www.roanoke.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Rochester Institute of Technology','name_alpha' => 'Rochester Institute of Technology','website' => 'www.rit.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Rust College','name_alpha' => 'Rust College','website' => 'http://www.rustcollege.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Saint Louis University','name_alpha' => 'Saint Louis University','website' => 'www.slu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Salem College','name_alpha' => 'Salem College','website' => 'www.salem.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Samford University','name_alpha' => 'Samford University','website' => 'www.samford.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of San Francisco','name_alpha' => 'San Francisco, University of','website' => 'www.usfca.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Savannah College of Art and Design','name_alpha' => 'Savannah College of Art and Design','website' => 'www.scad.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Sewanee: The University of the South','name_alpha' => 'Sewanee: The University of the South','website' => 'www.sewanee.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Shorter University','name_alpha' => 'Shorter University','website' => 'www.shorter.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Simmons College','name_alpha' => 'Simmons College','website' => 'www.simmons.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Skidmore College','name_alpha' => 'Skidmore College','website' => 'www.skidmore.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of South Alabama','name_alpha' => 'South Alabama, University of','website' => 'www.southalabama.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of South Carolina','name_alpha' => 'South Carolina, University of','website' => 'www.sc.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Southern Adventist University ','name_alpha' => 'Southern Adventist University ','website' => 'www.southern.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Southern Methodist University','name_alpha' => 'Southern Methodist University','website' => 'www.smu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Southern Mississippi','name_alpha' => 'Southern Mississippi, University of','website' => 'www.usm.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Southwestern University','name_alpha' => 'Southwestern University','website' => 'http://go.southwestern.edu/']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'St. Lawrence University ','name_alpha' => 'St. Lawrence University ','website' => 'www.stlawu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Stevens Institute of Technology','name_alpha' => 'Stevens Institute of Technology','website' => 'www.stevens.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'SUNY Cortland','name_alpha' => 'SUNY Cortland','website' => 'www.cortland.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Sweet Briar College','name_alpha' => 'Sweet Briar College','website' => 'www.sbc.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Syracuse University','name_alpha' => 'Syracuse University','website' => 'https://www.syracuse.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Tampa','name_alpha' => 'Tampa, University of','website' => 'www.ut.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Tennessee Student Assistance Corporation (TSAC)','name_alpha' => 'Tennessee Student Assistance Corporation (TSAC)','website' => 'www.tn.gov/collegepays']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Tennessee Tech University','name_alpha' => 'Tennessee Tech University','website' => 'www.tntech.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Tennessee Wesleyan College','name_alpha' => 'Tennessee Wesleyan College','website' => 'www.tnwesleyan.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Tennessee, Knoxville','name_alpha' => 'Tennessee, University of, Knoxville','website' => 'www.utk.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Tennessee, Martin','name_alpha' => 'Tennessee, University of, Martin','website' => 'www.utm.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Tennessee, Chattanooga','name_alpha' => 'Tennessee, University of, Chattanooga','website' => 'www.utc.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Texas A&M University','name_alpha' => 'Texas A&M University','website' => 'www.tamu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Texas Christian University','name_alpha' => 'Texas Christian University','website' => 'http://www.tcu.edu/']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'The Art Institute of Tennessee-Nashville','name_alpha' => 'Art Institute of Tennessee-Nashville, The','website' => 'www.artinstitutes.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Transylvania University','name_alpha' => 'Transylvania University','website' => 'www.transy.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Trinity College ','name_alpha' => 'Trinity College ','website' => 'www.trincoll.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Trinity University','name_alpha' => 'Trinity University','website' => 'www.trinity.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Tufts University','name_alpha' => 'Tufts University','website' => 'www.tufts.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Tulane University','name_alpha' => 'Tulane University','website' => 'www.tulane.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Tulsa','name_alpha' => 'Tulsa, University of','website' => 'www.utulsa.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Tusculum College','name_alpha' => 'Tusculum College','website' => 'www.tusculum.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Union College','name_alpha' => 'Union College','website' => 'www.union.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Union University ','name_alpha' => 'Union University ','website' => 'www.uu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'United States Coast Guard Academy','name_alpha' => 'United States Coast Guard Academy','website' => 'www.uscga.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'United States Military Academy','name_alpha' => 'United States Military Academy','website' => 'www.usma.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'United States Naval Academy','name_alpha' => 'United States Naval Academy','website' => 'www.usna.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'University of Limerick','name_alpha' => 'Limerick, University of','website' => 'www.ul.ie']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Valdosta State University','name_alpha' => 'Valdosta State University','website' => 'valdosta.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Vanderbilt University','name_alpha' => 'Vanderbilt University','website' => 'www.vanderbilt.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Villanova University','name_alpha' => 'Villanova University','website' => 'www.villanova.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Virginia Commonwealth University','name_alpha' => 'Virginia Commonwealth University','website' => 'www.vcu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Virginia Tech','name_alpha' => 'Virginia Tech','website' => 'www.vt.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Wake Forest University','name_alpha' => 'Wake Forest University','website' => 'www.wfu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Warren Wilson College','name_alpha' => 'Warren Wilson College','website' => 'www.warren-wilson.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Washington and Lee University','name_alpha' => 'Washington and Lee University','website' => 'www.wlu.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Washington University, St. Louis','name_alpha' => 'Washington University, St. Louis','website' => 'www.wustl.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Watkins College of Art','name_alpha' => 'Watkins College of Art','website' => 'http://www.watkins.edu/']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Wesleyan College','name_alpha' => 'Wesleyan College','website' => 'www.wesleyancollege.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Western Kentucky University','name_alpha' => 'Western Kentucky University','website' => 'www.wku.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Wittenberg University','name_alpha' => 'Wittenberg University','website' => 'www.wittenberg.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Wofford College','name_alpha' => 'Wofford College','website' => 'www.wofford.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'College of Wooster','name_alpha' => 'Wooster, College of','website' => 'www.wooster.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Worcester Polytechnic Institute','name_alpha' => 'Worcester Polytechnic Institute','website' => 'www.wpi.edu']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Xavier University School of Medicine','name_alpha' => 'Xavier University, School of Medicine','website' => 'www.xusom.com']);

	factory(\App\Models\Organization::class)->create(['name_display' => 'Xavier University','name_alpha' => 'Xavier University','website' => 'www.xavier.edu']);

	factory(\App\Models\Organization::class)->create([
	    'name_display' => 'Young Harris College',
	    'name_alpha' => 'Young Harris College',
	    'website' => 'www.yhc.edu'
	]);
	
    }
}
