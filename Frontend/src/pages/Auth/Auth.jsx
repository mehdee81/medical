import { styled } from "styled-components";
import Container from "../../assets/container.png";

export const StyledAuth = styled.div`
    display: grid;
    grid-template-columns: ${(props) =>
        props.page === "login" ? "1fr 2fr" : "2fr 1fr"};
    height: 100dvh;
`;

export const FormSection = styled.section`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2.5rem 0;
    row-gap: 2rem;
`;

export const Form = styled.form`
    display: grid;
    grid-template-columns: 1fr 1fr;
    width: 60%;
    grid-gap: 2rem;
    direction: rtl;
`;

export const Line = styled.div`
    position: absolute;
    left: ${(props) => props.page === "signup" && "0"};
    right: ${(props) => props.page === "login" && "0"};
    background-color: var(--color-green-600);
    width: 2rem;
    height: 100%;
`;

export const GreetingSection = styled.section`
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

export const Greeting = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    row-gap: 2rem;
    width: 60%;
`;
