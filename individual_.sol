// SPDX-License-Identifier: MIT
pragma solidity ^0.8.7;
contract Individual_{
    struct Individual{
        int ind_id;
        string NIC_no;
        string Passport_no;
        string Email;
        string Phone_no;
    }
    Individual []ind;
    function addind(
        int ind_id,
        string memory NIC_no, 
        string memory Passport_no, 
        string memory Email, 
        string memory Phone_no
    ) public{
        Individual memory q= Individual(ind_id,NIC_no,Passport_no,Email,Phone_no);
        ind.push(q);
    }
    function getIndividual(
        int ind_id
    ) public view returns(
        string memory,
        string memory,
        string memory, 
        string memory){
            uint i;
            for(i=0;i<ind.length;i++){
                Individual memory q= ind[i];

                if(q.ind_id==ind_id){
                    return(q.NIC_no,q.Passport_no,q.Email,q.Phone_no);
                }
            }
            return("not found","not found","not found","not found");
        }
}