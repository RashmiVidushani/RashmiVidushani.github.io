// SPDX-License-Identifier: MIT
pragma solidity ^0.8.7;
contract doctor_{
    struct Doctor{
        int doc_id;
        string SLMC_no;
        string NIC_no;
        string Passport_no;
        string Email;
        string Phone_no;
    }
    Doctor []doc;
    function adddoc(
        int doc_id,
        string memory SLMC_no, 
        string memory NIC_no, 
        string memory Passport_no, 
        string memory Email, 
        string memory Phone_no
    ) public{
        Doctor memory d= Doctor(doc_id,SLMC_no,NIC_no,Passport_no,Email,Phone_no);
        doc.push(d);
    }
    function getDoctor(
        int doc_id
    ) public view returns(
        string memory,
        string memory, 
        string memory,
        string memory, 
        string memory){
            uint i;
            for(i=0;i<doc.length;i++){
                Doctor memory d= doc[i];

                if(d.doc_id==doc_id){
                    return(d.SLMC_no, d.NIC_no,d.Passport_no,d.Email,d.Phone_no);
                }
            }
            return("not found","not found","not found","not found","not found");
        }
}