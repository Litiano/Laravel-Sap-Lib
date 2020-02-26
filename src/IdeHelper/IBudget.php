<?php
namespace Litiano\Sap\IdeHelper;

/**
 * Class IBudget
 * GUID={C1F83FBE-3A3F-4A81-8B0B-B5485DC6ADF9}
 *
 * @property-read float $FutureAnnualExpensesCreditSys property FutureAnnualExpensesCreditSys
 * @property-read float $FutureAnnualExpensesCreditLoc property FutureAnnualExpensesCreditLoc
 * @property-read float $FutureAnnualExpensesDebitSys property FutureAnnualExpensesDebitSys
 * @property-read float $FutureAnnualExpensesDebitLoc property FutureAnnualExpensesDebitLoc
 * @property-read float $FutureAnnualRevenuesCredit property FutureAnnualRevenuesCredit
 * @property-read float $FutureAnnualRevenuesDebit property FutureAnnualRevenuesDebit
 * @property-read float $FutureRevenuesDebitSys property FutureRevenuesDebitSC
 * @property-read float $FutureRevenuesDebitLoc property FutureRevenuesDebitLC
 * @property float $ParentAccPercent property ParentAccPercent
 * @property-read string|VT_DATE $StartofFiscalYear property StartofFiscalYear
 * @property string $ParentAccountKey property ParentAccountKey
 * @property float $TotalAnnualBudgetDebitSys property TotalAnnualBudgetDebitSys
 * @property-read float $BudgetBalanceDebitSys property BudgetBalanceDebitSys
 * @property-read float $BudgetBalanceDebitLoc property BudgetBalanceDebitLoc
 * @property float $TotalAnnualBudgetDebitLoc property TotalAnnualBudgetDebitLoc
 * @property float $TotalAnnualBudgetCreditSys property TotalAnnualBudgetCreditSys
 * @property float $TotalAnnualBudgetCreditLoc property TotalAnnualBudgetCreditLoc
 * @property-read float $BudgetBalanceCreditSys property BudgetBalanceCreditSys
 * @property-read float $BudgetBalanceCreditLoc property BudgetBalanceCreditLoc
 * @property int $DivisionCode property DivisionCode
 * @property string $AccountCode property AccountCode
 * @property-read int $Numerator property Numerator
 * @property-read mixed|VT_PTR $Lines property Lines
 * @property-read IUserFields $UserFields Get User Fields
 * @property-read mixed|VT_PTR $Browser Get Browser
 * @property int $BudgetScenario property BudgetScenario
 * @property-read mixed|VT_PTR $CostAccountingLines property CostAccountingLines
 */
class IBudget 
{
	/**
	 * DISPID=1610612736
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param mixed|VT_PTR $ppvObj [out]
	 * @return void 
	 */
	function QueryInterface(
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* mixed|VT_PTR [26] [out] --> mixed|VT_PTR [26]  */ &$ppvObj 
	)
	{
	}

	/**
	 * DISPID=1610612737
	 * @return string 
	 */
	function AddRef()
	{
	}

	/**
	 * DISPID=1610612738
	 * @return string 
	 */
	function Release()
	{
	}

	/**
	 * DISPID=1610678272
	 * @param int $pctinfo [out]
	 * @return void 
	 */
	function GetTypeInfoCount(
		/* mixed|VT_PTR [26] [out] --> int [23]  */ &$pctinfo 
	)
	{
	}

	/**
	 * DISPID=1610678273
	 * @param int $itinfo [in]
	 * @param string $lcid [in]
	 * @param mixed|VT_PTR $pptinfo [out]
	 * @return void 
	 */
	function GetTypeInfo(
		/* int [23] [in] */ $itinfo,
		/* string [19] [in] */ $lcid,
		/* mixed|VT_PTR [26] [out] --> mixed|VT_PTR [26]  */ &$pptinfo 
	)
	{
	}

	/**
	 * DISPID=1610678274
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param mixed|VT_PTR $rgszNames [in]
	 * @param int $cNames [in]
	 * @param string $lcid [in]
	 * @param int $rgdispid [out]
	 * @return void 
	 */
	function GetIDsOfNames(
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* mixed|VT_PTR [26] [in] --> mixed|VT_PTR [26]  */ &$rgszNames,
		/* int [23] [in] */ $cNames,
		/* string [19] [in] */ $lcid,
		/* mixed|VT_PTR [26] [out] --> int [3]  */ &$rgdispid 
	)
	{
	}

	/**
	 * DISPID=1610678275
	 * @param int $dispidMember [in]
	 * @param int|VT_USERDEFINED $riid [in]
	 * @param string $lcid [in]
	 * @param string $wFlags [in]
	 * @param int|VT_USERDEFINED $pdispparams [in]
	 * @param variant|VT_VARIANT $pvarResult [out]
	 * @param int|VT_USERDEFINED $pexcepinfo [out]
	 * @param int $puArgErr [out]
	 * @return void 
	 */
	function Invoke(
		/* int [3] [in] */ $dispidMember,
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$riid,
		/* string [19] [in] */ $lcid,
		/* string [18] [in] */ $wFlags,
		/* mixed|VT_PTR [26] [in] --> int|VT_USERDEFINED [29]  */ &$pdispparams,
		/* mixed|VT_PTR [26] [out] --> variant|VT_VARIANT [12]  */ &$pvarResult,
		/* mixed|VT_PTR [26] [out] --> int|VT_USERDEFINED [29]  */ &$pexcepinfo,
		/* mixed|VT_PTR [26] [out] --> int [23]  */ &$puArgErr 
	)
	{
	}

	/**
	 * DISPID=1
	 * @return int 
	 * method Add
	 */
	function Add()
	{
	}

	/**
	 * DISPID=3
	 * @return int 
	 * method Remove
	 */
	function Remove()
	{
	}

	/**
	 * DISPID=4
	 * @param int $Key [in]
	 * @return bool 
	 * method GetByKey
	 */
	function GetByKey(
		/* int [3] [in] */ $Key 
	)
	{
	}

	/**
	 * DISPID=5
	 * @param string $FileName [in][out]
	 * @return void 
	 * method SaveXML
	 */
	function SaveXML(
		/* mixed|VT_PTR [26] [in][out] --> string [8]  */ &$FileName 
	)
	{
	}

	/**
	 * DISPID=6
	 * @return int 
	 * method Update
	 */
	function Update()
	{
	}

	/**
	 * DISPID=7
	 * @var float $FutureAnnualExpensesCreditSys [5] property FutureAnnualExpensesCreditSys
	*/
	var $FutureAnnualExpensesCreditSys;

	/**
	 * DISPID=8
	 * @var float $FutureAnnualExpensesCreditLoc [5] property FutureAnnualExpensesCreditLoc
	*/
	var $FutureAnnualExpensesCreditLoc;

	/**
	 * DISPID=9
	 * @var float $FutureAnnualExpensesDebitSys [5] property FutureAnnualExpensesDebitSys
	*/
	var $FutureAnnualExpensesDebitSys;

	/**
	 * DISPID=10
	 * @var float $FutureAnnualExpensesDebitLoc [5] property FutureAnnualExpensesDebitLoc
	*/
	var $FutureAnnualExpensesDebitLoc;

	/**
	 * DISPID=11
	 * @var float $FutureAnnualRevenuesCredit [5] property FutureAnnualRevenuesCredit
	*/
	var $FutureAnnualRevenuesCredit;

	/**
	 * DISPID=12
	 * @var float $FutureAnnualRevenuesDebit [5] property FutureAnnualRevenuesDebit
	*/
	var $FutureAnnualRevenuesDebit;

	/**
	 * DISPID=13
	 * @var float $FutureRevenuesDebitSys [5] property FutureRevenuesDebitSC
	*/
	var $FutureRevenuesDebitSys;

	/**
	 * DISPID=14
	 * @var float $FutureRevenuesDebitLoc [5] property FutureRevenuesDebitLC
	*/
	var $FutureRevenuesDebitLoc;

	/**
	 * DISPID=15
	 * @var float $ParentAccPercent [5] property ParentAccPercent
	*/
	var $ParentAccPercent;

	/**
	 * DISPID=16
	 * @var string|VT_DATE $StartofFiscalYear [7] property StartofFiscalYear
	*/
	var $StartofFiscalYear;

	/**
	 * DISPID=17
	 * @var string $ParentAccountKey [8] property ParentAccountKey
	*/
	var $ParentAccountKey;

	/**
	 * DISPID=18
	 * @var float $TotalAnnualBudgetDebitSys [5] property TotalAnnualBudgetDebitSys
	*/
	var $TotalAnnualBudgetDebitSys;

	/**
	 * DISPID=19
	 * @var float $BudgetBalanceDebitSys [5] property BudgetBalanceDebitSys
	*/
	var $BudgetBalanceDebitSys;

	/**
	 * DISPID=20
	 * @var float $BudgetBalanceDebitLoc [5] property BudgetBalanceDebitLoc
	*/
	var $BudgetBalanceDebitLoc;

	/**
	 * DISPID=21
	 * @var float $TotalAnnualBudgetDebitLoc [5] property TotalAnnualBudgetDebitLoc
	*/
	var $TotalAnnualBudgetDebitLoc;

	/**
	 * DISPID=22
	 * @var float $TotalAnnualBudgetCreditSys [5] property TotalAnnualBudgetCreditSys
	*/
	var $TotalAnnualBudgetCreditSys;

	/**
	 * DISPID=23
	 * @var float $TotalAnnualBudgetCreditLoc [5] property TotalAnnualBudgetCreditLoc
	*/
	var $TotalAnnualBudgetCreditLoc;

	/**
	 * DISPID=24
	 * @var float $BudgetBalanceCreditSys [5] property BudgetBalanceCreditSys
	*/
	var $BudgetBalanceCreditSys;

	/**
	 * DISPID=25
	 * @var float $BudgetBalanceCreditLoc [5] property BudgetBalanceCreditLoc
	*/
	var $BudgetBalanceCreditLoc;

	/**
	 * DISPID=26
	 * @var int $DivisionCode [3] property DivisionCode
	*/
	var $DivisionCode;

	/**
	 * DISPID=27
	 * @var string $AccountCode [8] property AccountCode
	*/
	var $AccountCode;

	/**
	 * DISPID=28
	 * @var int $Numerator [3] property Numerator
	*/
	var $Numerator;

	/**
	 * DISPID=29
	 * @var mixed|VT_PTR $Lines [26] property Lines
	*/
	var $Lines;

	/**
	 * DISPID=30
	 * @var IUserFields $UserFields [26] Get User Fields
	*/
	var $UserFields;

	/**
	 * DISPID=31
	 * @var mixed|VT_PTR $Browser [26] Get Browser
	*/
	var $Browser;

	/**
	 * DISPID=32
	 * @var int $BudgetScenario [3] property BudgetScenario
	*/
	var $BudgetScenario;

	/**
	 * DISPID=33
	 * @return string 
	 * Get the object's data in xml format.
	 */
	function GetAsXML()
	{
	}

	/**
	 * DISPID=34
	 * @param string $FileName [in]
	 * @return void 
	 * Save the object's data in xml format.
	 */
	function SaveToFile(
		/* string [8] [in] */ $FileName 
	)
	{
	}

	/**
	 * DISPID=35
	 * @var mixed|VT_PTR $CostAccountingLines [26] property CostAccountingLines
	*/
	var $CostAccountingLines;

}