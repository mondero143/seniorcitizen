/*
 * Generated by JasperReports - 3/17/21 3:06 PM
 */
import net.sf.jasperreports.engine.*;
import net.sf.jasperreports.engine.fill.*;

import java.util.*;
import java.math.*;
import java.text.*;
import java.io.*;
import java.net.*;

import net.sf.jasperreports.engine.*;
import java.util.*;
import net.sf.jasperreports.engine.data.*;


/**
 *
 */
public class payments_1615964782201_207007 extends JREvaluator
{


    /**
     *
     */
    private JRFillParameter parameter_REPORT_LOCALE = null;
    private JRFillParameter parameter_objid = null;
    private JRFillParameter parameter_REPORT_VIRTUALIZER = null;
    private JRFillParameter parameter_REPORT_TIME_ZONE = null;
    private JRFillParameter parameter_REPORT_FILE_RESOLVER = null;
    private JRFillParameter parameter_REPORT_SCRIPTLET = null;
    private JRFillParameter parameter_REPORT_PARAMETERS_MAP = null;
    private JRFillParameter parameter_REPORT_CONNECTION = null;
    private JRFillParameter parameter_REPORT_CLASS_LOADER = null;
    private JRFillParameter parameter_REPORT_DATA_SOURCE = null;
    private JRFillParameter parameter_REPORT_URL_HANDLER_FACTORY = null;
    private JRFillParameter parameter_IS_IGNORE_PAGINATION = null;
    private JRFillParameter parameter_datefrom = null;
    private JRFillParameter parameter_REPORT_FORMAT_FACTORY = null;
    private JRFillParameter parameter_REPORT_MAX_COUNT = null;
    private JRFillParameter parameter_REPORT_TEMPLATES = null;
    private JRFillParameter parameter_dateto = null;
    private JRFillParameter parameter_masname1 = null;
    private JRFillParameter parameter_REPORT_RESOURCE_BUNDLE = null;
    private JRFillParameter parameter_totalamount = null;
    private JRFillField field_datedeleted = null;
    private JRFillField field_amountmas = null;
    private JRFillField field_COLUMN_48 = null;
    private JRFillField field_dateofbirth = null;
    private JRFillField field_controlno = null;
    private JRFillField field_dateissuedentitle = null;
    private JRFillField field_city = null;
    private JRFillField field_amount = null;
    private JRFillField field_balance = null;
    private JRFillField field_barangay = null;
    private JRFillField field_spouse = null;
    private JRFillField field_pending = null;
    private JRFillField field_age = null;
    private JRFillField field_province = null;
    private JRFillField field_gender = null;
    private JRFillField field_deceased = null;
    private JRFillField field_placeofbirth = null;
    private JRFillField field_civilstatus = null;
    private JRFillField field_COLUMN_51 = null;
    private JRFillField field_COLUMN_50 = null;
    private JRFillField field_middlename = null;
    private JRFillField field_objid = null;
    private JRFillField field_orno = null;
    private JRFillField field_status = null;
    private JRFillField field_statusreg = null;
    private JRFillField field_datemasreg = null;
    private JRFillField field_r1 = null;
    private JRFillField field_ornomas = null;
    private JRFillField field_timecreate = null;
    private JRFillField field_b3 = null;
    private JRFillField field_lastname = null;
    private JRFillField field_b2 = null;
    private JRFillField field_citizenship = null;
    private JRFillField field_masname = null;
    private JRFillField field_id = null;
    private JRFillField field_datecreate = null;
    private JRFillField field_datepayment = null;
    private JRFillField field_b1 = null;
    private JRFillField field_mas = null;
    private JRFillField field_age3 = null;
    private JRFillField field_age2 = null;
    private JRFillField field_entitlement = null;
    private JRFillField field_COLUMN_15 = null;
    private JRFillField field_age1 = null;
    private JRFillField field_firstname = null;
    private JRFillField field_reqamount = null;
    private JRFillField field_delete_user = null;
    private JRFillField field_address = null;
    private JRFillField field_r2 = null;
    private JRFillField field_objidmas = null;
    private JRFillField field_user = null;
    private JRFillField field_r3 = null;
    private JRFillField field_advance = null;
    private JRFillVariable variable_PAGE_NUMBER = null;
    private JRFillVariable variable_COLUMN_NUMBER = null;
    private JRFillVariable variable_REPORT_COUNT = null;
    private JRFillVariable variable_PAGE_COUNT = null;
    private JRFillVariable variable_COLUMN_COUNT = null;
    private JRFillVariable variable_totalamount = null;


    /**
     *
     */
    public void customizedInit(
        Map pm,
        Map fm,
        Map vm
        )
    {
        initParams(pm);
        initFields(fm);
        initVars(vm);
    }


    /**
     *
     */
    private void initParams(Map pm)
    {
        parameter_REPORT_LOCALE = (JRFillParameter)pm.get("REPORT_LOCALE");
        parameter_objid = (JRFillParameter)pm.get("objid");
        parameter_REPORT_VIRTUALIZER = (JRFillParameter)pm.get("REPORT_VIRTUALIZER");
        parameter_REPORT_TIME_ZONE = (JRFillParameter)pm.get("REPORT_TIME_ZONE");
        parameter_REPORT_FILE_RESOLVER = (JRFillParameter)pm.get("REPORT_FILE_RESOLVER");
        parameter_REPORT_SCRIPTLET = (JRFillParameter)pm.get("REPORT_SCRIPTLET");
        parameter_REPORT_PARAMETERS_MAP = (JRFillParameter)pm.get("REPORT_PARAMETERS_MAP");
        parameter_REPORT_CONNECTION = (JRFillParameter)pm.get("REPORT_CONNECTION");
        parameter_REPORT_CLASS_LOADER = (JRFillParameter)pm.get("REPORT_CLASS_LOADER");
        parameter_REPORT_DATA_SOURCE = (JRFillParameter)pm.get("REPORT_DATA_SOURCE");
        parameter_REPORT_URL_HANDLER_FACTORY = (JRFillParameter)pm.get("REPORT_URL_HANDLER_FACTORY");
        parameter_IS_IGNORE_PAGINATION = (JRFillParameter)pm.get("IS_IGNORE_PAGINATION");
        parameter_datefrom = (JRFillParameter)pm.get("datefrom");
        parameter_REPORT_FORMAT_FACTORY = (JRFillParameter)pm.get("REPORT_FORMAT_FACTORY");
        parameter_REPORT_MAX_COUNT = (JRFillParameter)pm.get("REPORT_MAX_COUNT");
        parameter_REPORT_TEMPLATES = (JRFillParameter)pm.get("REPORT_TEMPLATES");
        parameter_dateto = (JRFillParameter)pm.get("dateto");
        parameter_masname1 = (JRFillParameter)pm.get("masname1");
        parameter_REPORT_RESOURCE_BUNDLE = (JRFillParameter)pm.get("REPORT_RESOURCE_BUNDLE");
        parameter_totalamount = (JRFillParameter)pm.get("totalamount");
    }


    /**
     *
     */
    private void initFields(Map fm)
    {
        field_datedeleted = (JRFillField)fm.get("datedeleted");
        field_amountmas = (JRFillField)fm.get("amountmas");
        field_COLUMN_48 = (JRFillField)fm.get("COLUMN_48");
        field_dateofbirth = (JRFillField)fm.get("dateofbirth");
        field_controlno = (JRFillField)fm.get("controlno");
        field_dateissuedentitle = (JRFillField)fm.get("dateissuedentitle");
        field_city = (JRFillField)fm.get("city");
        field_amount = (JRFillField)fm.get("amount");
        field_balance = (JRFillField)fm.get("balance");
        field_barangay = (JRFillField)fm.get("barangay");
        field_spouse = (JRFillField)fm.get("spouse");
        field_pending = (JRFillField)fm.get("pending");
        field_age = (JRFillField)fm.get("age");
        field_province = (JRFillField)fm.get("province");
        field_gender = (JRFillField)fm.get("gender");
        field_deceased = (JRFillField)fm.get("deceased");
        field_placeofbirth = (JRFillField)fm.get("placeofbirth");
        field_civilstatus = (JRFillField)fm.get("civilstatus");
        field_COLUMN_51 = (JRFillField)fm.get("COLUMN_51");
        field_COLUMN_50 = (JRFillField)fm.get("COLUMN_50");
        field_middlename = (JRFillField)fm.get("middlename");
        field_objid = (JRFillField)fm.get("objid");
        field_orno = (JRFillField)fm.get("orno");
        field_status = (JRFillField)fm.get("status");
        field_statusreg = (JRFillField)fm.get("statusreg");
        field_datemasreg = (JRFillField)fm.get("datemasreg");
        field_r1 = (JRFillField)fm.get("r1");
        field_ornomas = (JRFillField)fm.get("ornomas");
        field_timecreate = (JRFillField)fm.get("timecreate");
        field_b3 = (JRFillField)fm.get("b3");
        field_lastname = (JRFillField)fm.get("lastname");
        field_b2 = (JRFillField)fm.get("b2");
        field_citizenship = (JRFillField)fm.get("citizenship");
        field_masname = (JRFillField)fm.get("masname");
        field_id = (JRFillField)fm.get("id");
        field_datecreate = (JRFillField)fm.get("datecreate");
        field_datepayment = (JRFillField)fm.get("datepayment");
        field_b1 = (JRFillField)fm.get("b1");
        field_mas = (JRFillField)fm.get("mas");
        field_age3 = (JRFillField)fm.get("age3");
        field_age2 = (JRFillField)fm.get("age2");
        field_entitlement = (JRFillField)fm.get("entitlement");
        field_COLUMN_15 = (JRFillField)fm.get("COLUMN_15");
        field_age1 = (JRFillField)fm.get("age1");
        field_firstname = (JRFillField)fm.get("firstname");
        field_reqamount = (JRFillField)fm.get("reqamount");
        field_delete_user = (JRFillField)fm.get("delete_user");
        field_address = (JRFillField)fm.get("address");
        field_r2 = (JRFillField)fm.get("r2");
        field_objidmas = (JRFillField)fm.get("objidmas");
        field_user = (JRFillField)fm.get("user");
        field_r3 = (JRFillField)fm.get("r3");
        field_advance = (JRFillField)fm.get("advance");
    }


    /**
     *
     */
    private void initVars(Map vm)
    {
        variable_PAGE_NUMBER = (JRFillVariable)vm.get("PAGE_NUMBER");
        variable_COLUMN_NUMBER = (JRFillVariable)vm.get("COLUMN_NUMBER");
        variable_REPORT_COUNT = (JRFillVariable)vm.get("REPORT_COUNT");
        variable_PAGE_COUNT = (JRFillVariable)vm.get("PAGE_COUNT");
        variable_COLUMN_COUNT = (JRFillVariable)vm.get("COLUMN_COUNT");
        variable_totalamount = (JRFillVariable)vm.get("totalamount");
    }


    /**
     *
     */
    public Object evaluate(int id) throws Throwable
    {
        Object value = null;

        switch (id)
        {
            case 0 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=0$
                break;
            }
            case 1 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=1$
                break;
            }
            case 2 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=2$
                break;
            }
            case 3 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=3$
                break;
            }
            case 4 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=4$
                break;
            }
            case 5 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=5$
                break;
            }
            case 6 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=6$
                break;
            }
            case 7 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=7$
                break;
            }
            case 8 : 
            {
                value = (java.lang.Double)(((java.lang.Double)field_amountmas.getValue()));//$JR_EXPR_ID=8$
                break;
            }
            case 9 : 
            {
                value = (java.lang.String)(((java.lang.String)parameter_datefrom.getValue()));//$JR_EXPR_ID=9$
                break;
            }
            case 10 : 
            {
                value = (java.lang.String)(((java.lang.String)parameter_dateto.getValue()));//$JR_EXPR_ID=10$
                break;
            }
            case 11 : 
            {
                value = (java.lang.String)(((java.lang.String)field_ornomas.getValue()));//$JR_EXPR_ID=11$
                break;
            }
            case 12 : 
            {
                value = (java.lang.String)(((java.lang.String)field_masname.getValue()));//$JR_EXPR_ID=12$
                break;
            }
            case 13 : 
            {
                value = (java.lang.String)(((java.lang.String)field_datepayment.getValue()));//$JR_EXPR_ID=13$
                break;
            }
            case 14 : 
            {
                value = (java.lang.String)(((java.lang.String)field_ornomas.getValue()));//$JR_EXPR_ID=14$
                break;
            }
            case 15 : 
            {
                value = (java.lang.String)(((java.lang.String)field_barangay.getValue()));//$JR_EXPR_ID=15$
                break;
            }
            case 16 : 
            {
                value = (java.lang.String)(((java.lang.Double)field_amountmas.getValue()));//$JR_EXPR_ID=16$
                break;
            }
            case 17 : 
            {
                value = (java.lang.Double)(((java.lang.Double)variable_totalamount.getValue()));//$JR_EXPR_ID=17$
                break;
            }
           default :
           {
           }
        }
        
        return value;
    }


    /**
     *
     */
    public Object evaluateOld(int id) throws Throwable
    {
        Object value = null;

        switch (id)
        {
            case 0 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=0$
                break;
            }
            case 1 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=1$
                break;
            }
            case 2 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=2$
                break;
            }
            case 3 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=3$
                break;
            }
            case 4 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=4$
                break;
            }
            case 5 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=5$
                break;
            }
            case 6 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=6$
                break;
            }
            case 7 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=7$
                break;
            }
            case 8 : 
            {
                value = (java.lang.Double)(((java.lang.Double)field_amountmas.getOldValue()));//$JR_EXPR_ID=8$
                break;
            }
            case 9 : 
            {
                value = (java.lang.String)(((java.lang.String)parameter_datefrom.getValue()));//$JR_EXPR_ID=9$
                break;
            }
            case 10 : 
            {
                value = (java.lang.String)(((java.lang.String)parameter_dateto.getValue()));//$JR_EXPR_ID=10$
                break;
            }
            case 11 : 
            {
                value = (java.lang.String)(((java.lang.String)field_ornomas.getOldValue()));//$JR_EXPR_ID=11$
                break;
            }
            case 12 : 
            {
                value = (java.lang.String)(((java.lang.String)field_masname.getOldValue()));//$JR_EXPR_ID=12$
                break;
            }
            case 13 : 
            {
                value = (java.lang.String)(((java.lang.String)field_datepayment.getOldValue()));//$JR_EXPR_ID=13$
                break;
            }
            case 14 : 
            {
                value = (java.lang.String)(((java.lang.String)field_ornomas.getOldValue()));//$JR_EXPR_ID=14$
                break;
            }
            case 15 : 
            {
                value = (java.lang.String)(((java.lang.String)field_barangay.getOldValue()));//$JR_EXPR_ID=15$
                break;
            }
            case 16 : 
            {
                value = (java.lang.String)(((java.lang.Double)field_amountmas.getOldValue()));//$JR_EXPR_ID=16$
                break;
            }
            case 17 : 
            {
                value = (java.lang.Double)(((java.lang.Double)variable_totalamount.getOldValue()));//$JR_EXPR_ID=17$
                break;
            }
           default :
           {
           }
        }
        
        return value;
    }


    /**
     *
     */
    public Object evaluateEstimated(int id) throws Throwable
    {
        Object value = null;

        switch (id)
        {
            case 0 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=0$
                break;
            }
            case 1 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=1$
                break;
            }
            case 2 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=2$
                break;
            }
            case 3 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=3$
                break;
            }
            case 4 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=4$
                break;
            }
            case 5 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=5$
                break;
            }
            case 6 : 
            {
                value = (java.lang.Integer)(new Integer(1));//$JR_EXPR_ID=6$
                break;
            }
            case 7 : 
            {
                value = (java.lang.Integer)(new Integer(0));//$JR_EXPR_ID=7$
                break;
            }
            case 8 : 
            {
                value = (java.lang.Double)(((java.lang.Double)field_amountmas.getValue()));//$JR_EXPR_ID=8$
                break;
            }
            case 9 : 
            {
                value = (java.lang.String)(((java.lang.String)parameter_datefrom.getValue()));//$JR_EXPR_ID=9$
                break;
            }
            case 10 : 
            {
                value = (java.lang.String)(((java.lang.String)parameter_dateto.getValue()));//$JR_EXPR_ID=10$
                break;
            }
            case 11 : 
            {
                value = (java.lang.String)(((java.lang.String)field_ornomas.getValue()));//$JR_EXPR_ID=11$
                break;
            }
            case 12 : 
            {
                value = (java.lang.String)(((java.lang.String)field_masname.getValue()));//$JR_EXPR_ID=12$
                break;
            }
            case 13 : 
            {
                value = (java.lang.String)(((java.lang.String)field_datepayment.getValue()));//$JR_EXPR_ID=13$
                break;
            }
            case 14 : 
            {
                value = (java.lang.String)(((java.lang.String)field_ornomas.getValue()));//$JR_EXPR_ID=14$
                break;
            }
            case 15 : 
            {
                value = (java.lang.String)(((java.lang.String)field_barangay.getValue()));//$JR_EXPR_ID=15$
                break;
            }
            case 16 : 
            {
                value = (java.lang.String)(((java.lang.Double)field_amountmas.getValue()));//$JR_EXPR_ID=16$
                break;
            }
            case 17 : 
            {
                value = (java.lang.Double)(((java.lang.Double)variable_totalamount.getEstimatedValue()));//$JR_EXPR_ID=17$
                break;
            }
           default :
           {
           }
        }
        
        return value;
    }


}
