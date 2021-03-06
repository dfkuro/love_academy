$(function() {


  
    

  /*======================================
  =            funciones menu            =
  ======================================*/
  
  $("#aboutus_a").click(function() {
      $('html, body').animate({
          scrollTop: $("#aboutus_section").offset().top
      }, 2000);
  });

  $("#teachers_a").click(function() {
      $('html, body').animate({
          scrollTop: $("#teachers_section").offset().top
      }, 2000);
  });

  $("#experiences_a").click(function() {
      $('html, body').animate({
          scrollTop: $("#experiences_section").offset().top
      }, 2000);
  });

  $("#knowledge_a").click(function() {
      $('html, body').animate({
          scrollTop: $("#knowledge_section").offset().top
      }, 2000);
  });

  $("#calendar_a").click(function() {
      $('html, body').animate({
          scrollTop: $("#calendar_section").offset().top
      }, 2000);
  });
  
  /*=====  End of funciones menu  ======*/
  
  

  $('#calendar').bootstrapTable({
    showHeader: false,
    groupBy: true,
    groupByField: 'date',
    sortOrder: 'asc',
    search: true,
    pagination: true,
    rowStyle: function(row, index) {
      return {
        classes: 'text-nowrap',
        css: {"padding": "0px", "margin": "0px", "max-height": "50px", "background-color": "rgba(145,147,150, 0.1)", "border": "none"}
      };
    },
    columns: [{
        field: 'row',
        title: '',
        formatter: function ( value, row, index){
          var lac_row = '<div class="lac-calendar"><div class="row"><div class="col-xs-7 pull-left"><span class="lac-event-day">'+row.day+
          '</span><span class="lac-event-title">'+row.title+
          '</span></div><div class="col-xs-5"><div class="lac-table-info pull-left"><span class="">'+row.type+
          '</span><span>|</span><span class="">'+row.place+
          '</span><span>|</span><span class="">'+row.time+
          '</span><span>|</span><span class="">'+row.title_type+'</span></div></div></div></div>';
          return lac_row;
        }
    }],
    data: [{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    },{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    }, {
        id: 2,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 3,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 4,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 5,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }]
  });


  $('#online_sessions').bootstrapTable({
    showHeader: false,
    // groupBy: true,
    // groupByField: 'date',
    sortOrder: 'asc',
    rowStyle: function(row, index) {
      return {
        classes: 'text-nowrap',
        css: {"padding": "0px", "margin": "0px", "max-height": "50px", "background-color": "rgba(145,147,150, 0.1)", "border": "none"}
      };
    },
    columns: [{
        field: 'row',
        title: '',
        formatter: function ( value, row, index){
          var lac_row = '<div class="lac-calendar" style="overflow: hidden;" ><div class="row"><div class="col-xs-7 pull-left"><span class="lac-event-title">'+row.title+
          '</span></div><div class="col-xs-5"><div class="lac-table-info pull-left"><span class="">'+row.type+
          '</span><span>|</span><span class="">'+row.place+
          '</span></div></div></div></div>';
          return lac_row;
        }
    }],
    data: [{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    }, {
        id: 2,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 3,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 4,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 5,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }]
  });



  $('#private_sessions').bootstrapTable({
    showHeader: false,
    // groupBy: true,
    // groupByField: 'date',
    sortOrder: 'asc',
    rowStyle: function(row, index) {
      return {
        classes: 'text-nowrap',
        css: {"padding": "0px", "margin": "0px", "max-height": "50px", "background-color": "rgba(145,147,150, 0.1)", "border": "none"}
      };
    },
    columns: [{
        field: 'row',
        title: '',
        formatter: function ( value, row, index){
          var lac_row = '<div class="lac-calendar" style="overflow: hidden;" ><div class="row"><div class="col-xs-7 pull-left"><span class="lac-event-title">'+row.title+
          '</span></div><div class="col-xs-5"><div class="lac-table-info pull-left"><span class="">'+row.type+
          '</span><span>|</span><span class="">'+row.place+
          '</span></div></div></div></div>';
          return lac_row;
        }
    }],
    data: [{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    }, {
        id: 2,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 3,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 4,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 5,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }]
  });



  $('#downloads').bootstrapTable({
    showHeader: false,
    // groupBy: true,
    // groupByField: 'date',
    sortOrder: 'asc',
    rowStyle: function(row, index) {
      return {
        classes: 'text-nowrap',
        css: {"padding": "0px", "margin": "0px", "max-height": "50px", "background-color": "rgba(145,147,150, 0.1)", "border": "none"}
      };
    },
    columns: [{
        field: 'row',
        title: '',
        formatter: function ( value, row, index){
          var lac_row = '<div class="lac-calendar" style="overflow: hidden;" ><div class="row"><div class="col-xs-7 pull-left"><span class="lac-event-title">'+row.title+
          '</span></div><div class="col-xs-4"><div class="lac-table-info pull-left"><span class="">'+row.type+
          '</span><span>|</span><span class="">'+row.place+
          '</span><span class=""> </span></div></div clas="col-xs-1"><div class="lac-table-info pull-left"><span><i class="fa fa-download fa-2x"></i></span></div><div></div></div></div>';
          return lac_row;
        }
    }],
    data: [{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    }, {
        id: 2,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 3,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 4,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 5,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }]
  });



  // *****************************************************
  // * section profile
  // *****************************************************


  $('#calendar_done').bootstrapTable({
    showHeader: false,
    groupBy: true,
    groupByField: 'date',
    sortOrder: 'asc',
    rowStyle: function(row, index) {
      return {
        classes: 'text-nowrap',
        css: {"padding": "0px", "margin": "0px", "max-height": "50px", "background-color": "rgba(145,147,150, 0.1)", "border": "none"}
      };
    },
    columns: [{
        field: 'row',
        title: '',
        formatter: function ( value, row, index){
          var lac_row = '<div class="lac-calendar"><div class="row"><div class="col-xs-7 pull-left"><span class="lac-event-day">'+row.day+
          '</span><span class="lac-event-title">'+row.title+
          '</span></div><div class="col-xs-5"><div class="lac-table-info pull-left"><span class="">'+row.type+
          '</span><span>|</span><span class="">'+row.place+
          '</span><span>|</span><span class="">'+row.time+
          '</span><span>|</span><span class="">'+row.title_type+'</span></div></div></div></div>';
          return lac_row;
        }
    }],
    data: [{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    },{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    }, {
        id: 2,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 3,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 4,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 5,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }]
  });



  $('#calendar_todo').bootstrapTable({
    showHeader: false,
    groupBy: true,
    groupByField: 'date',
    sortOrder: 'asc',
    rowStyle: function(row, index) {
      return {
        classes: 'text-nowrap',
        css: {"padding": "0px", "margin": "0px", "max-height": "50px", "background-color": "rgba(145,147,150, 0.1)", "border": "none"}
      };
    },
    columns: [{
        field: 'row',
        title: '',
        formatter: function ( value, row, index){
          var lac_row = '<div class="lac-calendar"><div class="row"><div class="col-xs-7 pull-left"><span class="lac-event-day">'+row.day+
          '</span><span class="lac-event-title">'+row.title+
          '</span></div><div class="col-xs-5"><div class="lac-table-info pull-left"><span class="">'+row.type+
          '</span><span>|</span><span class="">'+row.place+
          '</span><span>|</span><span class="">'+row.time+
          '</span><span>|</span><span class="">'+row.title_type+'</span></div></div></div></div>';
          return lac_row;
        }
    }],
    data: [{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    },{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    }, {
        id: 2,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }]
  });


  $('#table_blog').bootstrapTable({
    showHeader: false,
    // groupBy: true,
    // groupByField: 'date',
    sortOrder: 'asc',
    rowStyle: function(row, index) {
      return {
        classes: 'text-nowrap',
        css: {"padding": "0px", "margin": "0px", "max-height": "50px", "background-color": "rgba(145,147,150, 0.1)", "border": "none"}
      };
    },
    columns: [{
        field: 'row',
        title: '',
        formatter: function ( value, row, index){
          var lac_row = '<div class="lac-calendar" style="overflow: hidden;" ><div class="row"><div class="col-xs-7 pull-left"><span class="lac-event-title">'+row.title+
          '</span></div><div class="col-xs-5"><div class="lac-table-info pull-left"><span class="">'+row.type+
          '</span><span>|</span><span class="">'+row.place+
          '</span></div></div></div></div>';
          return lac_row;
        }
    }],
    data: [{
        id: 1,
        day: '16',
        title: 'MOON DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '21:00',
        title_link: "MOON DANCE",
        date: "OCTOBER 2016",
        title_type: "MOON DANCE"
    }, {
        id: 2,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 3,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 4,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }, {
        id: 5,
        day: '18',
        title: 'SUN DANCE / ECSTATIC DANCE',
        type: 'EXPERIENCE',
        place: 'CIUDAD DE MEXICO',
        time: '11:00/13:30',
        title_link: "SUN DANCE",
        date: "SEPTEMBER 2016",
        title_type: "SUN DANCE"
    }]
  });



});