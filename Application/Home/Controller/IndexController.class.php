<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<h1>weixin pages');
    }
    // 在线预约
    public function MakeAppointment(){
    	$this->display();
    }
    // 预约成功
    public function AppointmentSuccess(){
    	$this->display();
    }
    // 预约须知
    public function AppointmentNotice(){
    	$this->display();
    }
    // 个人中心
    public function PersonCenter(){
    	$this->display();
    }
    // 我的预约
    public function MyAppointment(){
    	$this->display();
    }
    // 选择医院
    public function ChooseHospital(){
    	$this->display();
    }
    // 宠物病例
    public function PetCase(){
    	$this->display();
    }
    // 宠物病例详情
    public function PetCaseDetail(){
    	$this->display();
    }
    // 检验报告
    public function InspectionReport(){
    	$this->display();
    }
    // 检验报告详情
    public function InspectionReportDetail(){
    	$this->display();
    }
    // 消费记录
    public function PurchaseHistory(){
    	$this->display();
    }
    // 消费记录详情
    public function PurchaseHistoryDetail(){
    	$this->display();
    }
    // 消费统计
    public function ConsumptionStatistics(){
    	$this->display();
    }

    // 病例明细-Single
    public function PetCaseDetailSingle(){
    	$this->display();
    }
    // 检验报告明细-Single
    public function InspectionReportDetailSingle(){
    	$this->display();
    }

    // test
    public function test(){
    	$this->display();
    }

}