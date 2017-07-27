package com.tcs;

import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.builder.SpringApplicationBuilder;
import org.springframework.cloud.netflix.sidecar.EnableSidecar;


/**
 * Created : 07/05/2017  (mm-dd-yyyy)
 * @author 1295519 Mohd Ashif Ali<ali.mohdashif@tcs.com>
 * @description SideCar App for Image Service
*/

@SpringBootApplication
@EnableSidecar
public class SideCarApplication {
	/**
	 * Main Method for Running this Application
	 */
	public static void main(String[] args) throws Exception{
		new SpringApplicationBuilder(SideCarApplication.class).web(true).run(args);
	}
	
//	@Bean
//	public EurekaInstanceConfigBean configInstance(InetUtils inet){
//		EurekaInstanceConfigBean instance = new EurekaInstanceConfigBean(inet);
//		instance.setHostname("127.0.0.1");
//		return instance;
//	}
}

