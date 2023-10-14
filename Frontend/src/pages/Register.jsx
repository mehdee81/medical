import { styled } from "styled-components";
import { useForm } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";

import Button from "../ui/Button";
import Heading from "../ui/Heading";
import SubHeading from "../ui/SubHeading";
import Input from "../ui/Input";

import Container from "../assets/container.png";
import { signUpSchema } from "./../constants/dataPatterns";

const StyledRegister = styled.div`
    display: grid;
    grid-template-columns: 2fr 1fr;
    height: 100dvh;
`;

const FormSection = styled.section`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2.5rem 0;
    row-gap: 2rem;
`;

const Form = styled.form`
    display: grid;
    grid-template-columns: 1fr 1fr;
    width: 60%;
    grid-gap: 2rem;
    direction: rtl;
`;

const Line = styled.div`
    position: absolute;
    left: 0;
    background-color: var(--color-green-600);
    width: 2rem;
    height: 100%;
`;

const GreetingSection = styled.section`
    background: linear-gradient(
            to right top,
            color-mix(in srgb, var(--color-green-600), transparent 10%) 0%,
            color-mix(in srgb, var(--color-green-500), transparent 20%) 100%
        ),
        url(${Container});
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
`;

const Greeting = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    row-gap: 2rem;
    width: 60%;
`;

function Register() {
    const { register, handleSubmit, control, reset } = useForm({
        resolver: yupResolver(signUpSchema),
    });

    function handleLogin(userInput) {
        console.log(userInput);
        reset();
    }
    return (
        <StyledRegister>
            <FormSection>
                <Line />
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
        </StyledRegister>
    );
}

export default Register;
