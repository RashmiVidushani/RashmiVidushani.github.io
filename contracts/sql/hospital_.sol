// SPDX-License-Identifier: MIT
pragma solidity ^0.8.7;
contract register_{
    struct Register{
        int reg_id;
        string Email;
        string Phone_no;
    }
    Register []reg;
    function addreg(
        int reg_id,
        string memory Email, 
        string memory Phone_no
    ) public{
        Register memory r= Register(reg_id,Email,Phone_no);
        reg.push(r);
    }
    function getRegister(
        int reg_id
    ) public view returns(
        string memory, 
        string memory){
            uint i;
            for(i=0;i<reg.length;i++){
                Register memory r= reg[i];

                if(r.reg_id==reg_id){
                    return(r.Email,r.Phone_no);
                }
            }
            return("not found","not found");
        }
}