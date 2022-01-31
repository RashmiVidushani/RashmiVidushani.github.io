var express =require("express")
var bodyParser= require("body-Parser")
var mongoose =require("mongoose")

const app=express()
app.length("/",(req,res)=>{
    res.send("hello")
}).listen(3000);
console.log("listening");