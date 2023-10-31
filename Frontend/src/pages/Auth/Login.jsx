import { useForm } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";

import Button from "../../ui/Button";
import Heading from "../../ui/Heading";
import SubHeading from "../../ui/SubHeading";
import Input from "../../ui/Input";

import { loginSchema } from "../../constants/dataPatterns";
import {
    Form,
    FormSection,
    Greeting,
    GreetingSection,
    Line,
    StyledAuth,
} from "./Auth";

function Login() {
    const { register, handleSubmit, control, reset } = useForm({
        resolver: yupResolver(loginSchema),
    });

    function handleLogin(userInput) {
        console.log(userInput);
        reset();
    }

    return (
        <StyledAuth page="login">
            <GreetingSection>
                <Greeting>
                    <Heading type="h1" color="light">
                        خوش آمدید
                    </Heading>
                    <SubHeading type="h1" color="light">
                        اگر حساب ندارید، با دکمه زیر حساب جدید ایجاد کنید
                    </SubHeading>
                    <Button type="outline">ساخت حساب جدید</Button>
                </Greeting>
            </GreetingSection>
            <FormSection>
                <Line page="login" />
                <Heading type="h1" color="dark">
                    ورود به حساب
                </Heading>
                <Form onSubmit={handleSubmit(handleLogin)}>
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
                        fullWidth
                        type="password"
                        shape="normal"
                        control={control}
                        register={{ ...register("password") }}
                        id="password"
                    >
                        رمز عبور
                    </Input>
                    <Button type="primary">ورود به حساب</Button>
                </Form>
            </FormSection>
        </StyledAuth>
    );
}

export default Login;
