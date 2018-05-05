<template>
<div>
 <br>
  <br>

    <el-row>
    <el-col :span="7">
      <el-card :body-style="{ padding: '50px' }"  style="width:250px;height:480px;background-color:gray">
        <h2><u>中国美食</u></h2>
		<p><router-link to="/food1">  <img src="/images/dongporou1.jpg">东坡肉</router-link></p>
        <p> <router-link to="/food2"> <img src="/images/shizitou1.jpg">狮子头</router-link></p>
        <p> <router-link to="/food3"> <img src="/images/chuancai1.jpg">川菜</router-link></p>
          <p> <router-link to="/food4"> <img src="/images/yuecai1.jpg">粤菜</router-link></p>
          <p> <router-link to="/food5"> <img src="/images/xiangcai1.jpg">湘菜</router-link></p>
      </el-card>
    </el-col>

    <el-col :span="10" >
      <div>
        <el-breadcrumb separator-class="el-icon-arrow-right">
            <el-breadcrumb-item :to="{ path: '/' }">HOME</el-breadcrumb-item>
            <el-breadcrumb-item>SOLUTIONS</el-breadcrumb-item>
            <el-breadcrumb-item>中国美食</el-breadcrumb-item>
            </el-breadcrumb>
      </div><br>
    <router-view/>

    </el-col>
    </el-row>
</div>
</template>

<script>
export default {
}
</script>
