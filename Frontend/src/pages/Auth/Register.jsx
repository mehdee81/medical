import { styled } from "styled-components";
import { useForm } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";

import Button from "../../ui/Button";
import Heading from "../../ui/Heading";
import SubHeading from "../../ui/SubHeading";
import Input from "../../ui/Input";

import { signUpSchema } from "../../constants/dataPatterns";
import {
    Form,
    FormSection,
    Greeting,
    GreetingSection,
    Line,
    StyledAuth,
} from "./Auth";

function Register() {
    const { register, handleSubmit, control, reset } = useForm({
        resolver: yupResolver(signUpSchema),
    });

    function handleLogin(userInput) {
        console.log(userInput);
        reset();
    }
    return (
        <StyledAuth page="signup">
            <FormSection>
                <Line page="signup" />
                <Heading type="h1" color="dark">
                    حساب جدید
                </Heading>
                <Form onSubmit={handleSubmit(handleLogin)}>
                    <Input
                        type="text"
                        shape="normal"
                        control={control}
                        register={{ ...register("first_name") }}
                        id="first_name"
                    >
                        نام
                    </Input>
                    <Input
                        type="text"
                        shape="normal"
                        control={control}
                        register={{ ...register("last_name") }}
                        id="last_name"
                    >
                        نام خانوادگی
                    </Input>
                    <Input
                        fullWidth
                        type="text"
                        shape="normal"
                        control={control}
                        register={{ ...register("national_code") }}
                        id="national_code"
                    >
                        کد ملی
                    </Input>
                    <Input
                        type="text"
                        shape="normal"
                        control={control}
                        register={{ ...register("province_id") }}
                        id="province_id"
                    >
                        استان
                    </Input>
                    <Input
                        type="text"
                        shape="normal"
                        control={control}
                        register={{ ...register("city_id") }}
                        id="city_id"
                    >
                        شهر
                    </Input>
                    <Input
                        type="text"
                        shape="normal"
                        control={control}
                        register={{ ...register("father_name") }}
                        id="father_name"
                    >
                        نام پدر
                    </Input>
                    <Input
                        type="text"
                        shape="normal"
                        control={control}
                        register={{ ...register("age") }}
                        id="age"
                    >
                        سن
                    </Input>
                    <Input
                        type="password"
                        shape="normal"
                        control={control}
                        register={{ ...register("password") }}
                        id="password"
                    >
                        رمز عبور
                    </Input>
                    <Input
                        type="password"
                        shape="normal"
                        control={control}
                        register={{ ...register("password2") }}
                        id="password2"
                    >
                        تکرار رمز عبور
                    </Input>
                    <Button fullWidth type="primary">
                        ساخت حساب جدید
                    </Button>
                </Form>
            </FormSection>
            <GreetingSection>
                <Greeting>
                    <Heading type="h1" color="light">
                        خوش آمدید
                    </Heading>
                    <SubHeading type="h1" color="light">
                        اگر حساب دارید، با دکمه زیر وارد حساب خود شوید
                    </SubHeading>
                    <Button type="outline">ورود به حساب</Button>
                </Greeting>
            </GreetingSection>
        </StyledAuth>
    );
}

export default Register;
