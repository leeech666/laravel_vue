<template>
  <div>
 <br>
  <br>

    <el-row>
    <el-col :span="7">
      <el-card :body-style="{ padding: '50px' }"  style="width:250px;height:480px;background-color:gray">
      <p>CHOOSE YOUR FAVOURATE COLOR</p>
<p><router-link to="/1-1"><img src="/images/Capture1black.jpg"></router-link></p>
<p><router-link to="/2-1"><img src="/images/Capture1blue.jpg"></router-link></p>
<p><router-link to="/3"><img src="/images/Capture1green.jpg"></router-link></p>
<p><router-link to="/4"><img src="/images/Capture1purple.jpg"></router-link></p>
<p><router-link to="/5"><img src="/images/Capture1red.jpg"></router-link></p>
      </el-card>
    </el-col>

    <el-col :span="10" style="height:600px" >
      <div>
        <el-breadcrumb separator-class="el-icon-arrow-right">
            <el-breadcrumb-item :to="{ path: '/' }">HOME</el-breadcrumb-item>
            <el-breadcrumb-item>SOLUTIONS</el-breadcrumb-item>
            <el-breadcrumb-item>FASHION</el-breadcrumb-item>
            </el-breadcrumb>
      </div><br>


    <router-view></router-view>

	  </el-col>
    </el-row>
</div>
</template>
export default {
}
</script>
