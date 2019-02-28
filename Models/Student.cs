using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace Project.Models
{
    public class Student
    {
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Student Name")]
        //[RegularExpression()]
        public string Sname { get; set; }
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Student Address")]
        [DataType(DataType.MultilineText)]
        public string Saddress { get; set; }
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Student Email")]
        [DataType(DataType.EmailAddress)]
        public string Semail { get; set; }
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Student Course")]
        public Gender SGender { get; set; }
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Student Gender")]
        public Gender genderlist { get; set; }
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Username")]
        public Gender Uname { get; set; }
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Password")]
        public Gender Pwd { get; set; }
        [Required(ErrorMessage = "Cant be empty")]
        [Display(Name = "Confirm Password")]
        public Gender Cpwd { get; set; }
        [Required(ErrorMessage = "Tick the box")]
        [Display(Name = "")]
        public bool check { get; set; }
    }
        public enum Gender
        {
            MCA,
            BCA,
            Mcom
        }


    }
