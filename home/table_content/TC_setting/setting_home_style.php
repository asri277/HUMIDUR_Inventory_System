<style type="text/css">

  *{
    margin: 0%;
    padding: 0%;
  }

  body{
    background-color: #E0E0E0;
    transition: background-color .5s;
  }

  nav{
    display: block;
    position: fixed;
    background-color: #3333FF;
    /* margin: top right bottom left  */
    padding: 1% 0% 1% 0%;
    width: 100%;
    box-shadow: 0px 1px 2px #404040;
		/* z-index: 1; */
    /* border: 1px solid #000000; */
  }

  .nav_container_inside{
    text-align: center;
    width: 10%;
    height: 50px;
    float: left;
  }

  .link_nav_top{
    /* border: 1px solid #000000; */
    text-decoration: none;
    font-family: arial;
    color: #FFFFFF;
    float: inherit;
    width: 100%;
    /* margin: top right bottom left  */
    padding: 11% 0% 11% 0%;
    transition: 0.3s;
  }

  .link_nav_top:hover{
    color: #FFFF33;
  }

  #back_to_home{
    /* margin: top right bottom left  */
    margin: 0% 1% 0% 1%;
    /* border: 1px solid #000000; */
  }

  #table_list{
    /* margin: top right bottom left  */
    margin: 0% 1% 0% 1%;
    /* border: 1px solid #000000; */
  }

/* -------------------------------------------------------------------------- */
/* Slide Menu Design */
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }

  .sidenav a {
    /* margin: top right bottom left  */
    padding: 20px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #FFFFFF;
    display: block;
    font-family: arial;
    transition: 0.3s;
  }

  .sidenav a:hover {
    color: #FFFF33;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

/* -------------------------------------------------------------------------- */
	.table_title{
		float: right;
		font-family: arial;
		color: #FFFFFF;
		/* margin: top right bottom left  */
		margin: 1% 10% 0% 0%;
		/* border: 1px solid #000000; */
	}

	.container_design{
	  float: left;
	  box-shadow: 0px 1px 2px #404040;
	  width: 98%;
		height: auto;
	  background-color: #FFFFFF;
	  /* margin: top right bottom left  */
	  margin: 8% auto 2% 1%;
		/* position: relative; */
	}

	.table_design{
		border: 1px solid #000000;
		width: 100%;
		border-collapse: collapse;
	}

	td,th{
		border: 1px solid #000000;
		/* margin: top right bottom left  */
		padding: 5px 0% 5px 5px;
	}

	td{
		text-align: center;
	}


</style>
